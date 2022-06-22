<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_post');
        $this->load->library('fungsi');
        $this->load->library('user_agent');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "Post Data";
        $data['category'] = $this->Mod_post->category()->result();
        $data['post'] = $this->Mod_post->post()->result();
        // dead($data);
        $this->template->load('layoutbackend', 'admin/post', $data);
    }
    public function add_post()
    {
        $data['title'] = "Post Data";
        $data['user'] = $this->db->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])->row_array();


        $data['category'] = $this->Mod_post->category()->result();
        $data['post'] = $this->Mod_post->post()->result();
        // dead($data['user']);
        $this->template->load('layoutbackend', 'admin/add_post', $data);
    }
    public function edit_post($post_id)
    {
        $data['title'] = "Edit Post Data";
        $data['post'] = $this->Mod_post->get_post($post_id)->row_array();
        $data['category'] = $this->Mod_post->category()->result();
        // dead($data['post']);
        $this->template->load('layoutbackend', 'admin/edit_post', $data);
    }
    public function edit_post_gallery($id)
    {
        $data['title'] = "Edit Post Data";
        $data['PO'] = $this->Mod_post->get_post_gallery($id)->row_array();
        $data['gallery'] = $this->Mod_post->gallery()->result();
        // dead($data['post']);
        $this->template->load('layoutbackend', 'admin/edit_post_gallery', $data);
    }

    public function insert_post()
    {
        // var_dump($this->input->post('username'));
        $this->_validate();
        $post_title = $this->input->post('post_title');
        $post_slug = url_title($post_title);
        $cek = $this->Mod_post->cekpost_title($post_title);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Post title Sudah Ada!!"));
        } else {
            $nama = slug($this->input->post('post_title'));
            $config['upload_path']   = './assets/foto/thumbnail/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
            $config['max_size']      = '9000';
            $config['max_width']     = '9000';
            $config['max_height']    = '9024';
            $config['file_name']     = $nama;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('imagefile')) {
                $gambar = $this->upload->data();

                $save  = array(
                    'post_id' => rand(0000, 9999),
                    'post_title' => $this->input->post('post_title'),
                    'post_link' => $this->input->post('post_link'),
                    'post_body' => $this->input->post('post_body'),
                    'category_id'  => $this->input->post('category_id'),
                    'post_date'  => $this->input->post('post_date'),
                    'post_format'  => $this->input->post('post_format'),
                    'post_topic'  => $this->input->post('post_topic'),
                    'post_slug'  => $post_slug,
                    'post_thumbnail' => $gambar['file_name'],
                    'id_user'  => $this->input->post('id_user'),
                );
                // dead($save);
                $this->Mod_post->insertpost("posts", $save);
                redirect('post/index');
                // echo json_encode(array("status" => TRUE));
            } else { //Apabila tidak ada gambar yang di upload
                $save  = array(
                    'post_id' => rand(0000, 9999),
                    'post_title' => $this->input->post('post_title'),
                    'post_link' => $this->input->post('post_link'),
                    'post_body' => $this->input->post('post_body'),
                    'post_date'  => $this->input->post('post_date'),
                    'post_format'  => $this->input->post('post_format'),
                    'post_topic'  => $this->input->post('post_topic'),
                    'post_slug'  => $post_slug,
                    'category_id'  => $this->input->post('category_id'),
                    'id_user'  => $this->input->post('id_user'),
                );
                // dead($save);
                $this->Mod_post->insertpost("posts", $save);
                redirect('post/index');
                // echo json_encode(array("status" => TRUE));
            }
        }
    }


    public function update_post()
    {
        if (!empty($_FILES['imagefile']['name'])) {
            // $this->_validate();
            $id = $this->input->post('post_id');

            $nama = slug($this->input->post('post_title'));
            $post_slug = url_title($nama);
            $config['upload_path']   = './assets/foto/thumbnail/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
            $config['max_size']      = '9000';
            $config['max_width']     = '9000';
            $config['max_height']    = '9024';
            $config['file_name']     = $nama;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('imagefile')) {
                $gambar = $this->upload->data();
                //Jika Password tidak kosong
                if ($this->input->post('post_title')) {
                    $save  = array(
                        'post_title' => $this->input->post('post_title'),
                        'post_link' => $this->input->post('post_link'),
                        'post_body' => $this->input->post('post_body'),
                        'category_id'  => $this->input->post('category_id'),
                        'post_date'  => $this->input->post('post_date'),
                        'post_format'  => $this->input->post('post_format'),
                        'post_topic'  => $this->input->post('post_topic'),
                        'post_slug'  => $post_slug,
                        'post_thumbnail' => $gambar['file_name'],
                        'id_user'  => $this->input->post('id_user'),
                    );
                } else { //Jika password kosong
                    $save  = array(
                        'post_title' => $this->input->post('post_title'),
                        'post_link' => $this->input->post('post_link'),
                        'post_body' => $this->input->post('post_body'),
                        'category_id'  => $this->input->post('category_id'),
                        'post_date'  => $this->input->post('post_date'),
                        'post_format'  => $this->input->post('post_format'),
                        'post_topic'  => $this->input->post('post_topic'),
                        'post_slug'  => $post_slug,
                        'post_thumbnail' => $gambar['file_name'],
                        'id_user'  => $this->input->post('id_user'),
                    );
                }
                // dead($save);

                $g = $this->Mod_post->getImage($id)->row_array();

                if ($g != null) {
                    //hapus gambar yg ada diserver
                    unlink('assets/foto/thumbnail/' . $g['image']);
                }

                $this->Mod_post->updatepost($id, $save);
                redirect('post/index');
                // echo json_encode(array("status" => TRUE));
            } else { //Apabila tidak ada gambar yang di upload
                // $gambar = $this->upload->data();
                //Jika Password tidak kosong
                if ($this->input->post('post_title')) {
                    $save  = array(
                        'post_title' => $this->input->post('post_title'),
                        'post_link' => $this->input->post('post_link'),
                        'post_body' => $this->input->post('post_body'),
                        'category_id'  => $this->input->post('category_id'),
                        'post_date'  => $this->input->post('post_date'),
                        'post_format'  => $this->input->post('post_format'),
                        'post_topic'  => $this->input->post('post_topic'),
                        'post_slug'  => $post_slug,
                        // 'post_thumbnail' => $gambar['file_name'],
                        'id_user'  => $this->input->post('id_user'),
                    );
                } else { //Jika password kosong
                    $save  = array(
                        'post_title' => $this->input->post('post_title'),
                        'post_link' => $this->input->post('post_link'),
                        'post_body' => $this->input->post('post_body'),
                        'category_id'  => $this->input->post('category_id'),
                        'post_date'  => $this->input->post('post_date'),
                        'post_format'  => $this->input->post('post_format'),
                        'post_topic'  => $this->input->post('post_topic'),
                        'post_slug'  => $post_slug,
                        // 'post_thumbnail' => $gambar['file_name'],
                        'id_user'  => $this->input->post('id_user'),
                    );
                }
                // dead($save);
                $this->Mod_post->updatepost($id, $save);
                redirect('post/index');
                // echo json_encode(array("status" => TRUE));
            }
        } else {


            $this->_validate();
            $id = $this->input->post('post_id');
            $nama = slug($this->input->post('post_title'));
            $post_slug = url_title($nama);
            if ($this->input->post('post_title')) {
                $save  = array(
                    'post_title' => $this->input->post('post_title'),
                    'post_link' => $this->input->post('post_link'),
                    'post_body' => $this->input->post('post_body'),
                    'category_id'  => $this->input->post('category_id'),
                    'post_date'  => $this->input->post('post_date'),
                    'post_format'  => $this->input->post('post_format'),
                    'post_topic'  => $this->input->post('post_topic'),
                    'post_slug'  => $post_slug,
                    // 'post_thumbnail' => $gambar['file_name'],
                    'id_user'  => $this->input->post('id_user'),
                );
            } else {
                $save  = array(
                    'post_title' => $this->input->post('post_title'),
                    'post_link' => $this->input->post('post_link'),
                    'post_body' => $this->input->post('post_body'),
                    'category_id'  => $this->input->post('category_id'),
                    'post_date'  => $this->input->post('post_date'),
                    'post_format'  => $this->input->post('post_format'),
                    'post_topic'  => $this->input->post('post_topic'),
                    'post_slug'  => $post_slug,
                    // 'post_thumbnail' => $gambar['file_name'],
                    'id_user'  => $this->input->post('id_user'),
                );
            }
            // dead($save);
            $this->Mod_post->updatepost($id, $save);
            redirect('post/index');
            // echo json_encode(array("status" => TRUE));
        }
    }

    public function delete($post_id)
    {
        $g = $this->Mod_post->getImage($post_id)->row_array();
        if ($g != null) {
            //hapus gambar yg ada diserver
            unlink('assets/foto/thumbnail/' . $g['post_thumbnail']);
        }
        $this->Mod_post->delete($post_id); // Panggil fungsi delete() yang ada di SiswaModel.php
        $this->session->set_flashdata('success', 'Data Simpanan Wajib Berhasil Dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('post_title') == '') {
            $data['inputerror'][] = 'post_title';
            $data['error_string'][] = 'Post Title is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('post_body') == '') {
            $data['inputerror'][] = 'post_body';
            $data['error_string'][] = 'Post Body is required';
            $data['status'] = FALSE;
        }


        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}
