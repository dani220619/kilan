<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends MY_Controller
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
        $data['title'] = "Gallery Data";
        $data['gallery'] = $this->Mod_post->gallery()->result();

        // dead($data);
        $this->template->load('layoutbackend', 'gallery/index', $data);
    }
    public function insert()
    {
        $name = $this->input->post('title');
        $cek = $this->Mod_post->cekgallery($name);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Gallery title Sudah Ada!!"));
        } else {
            $nama = slug($this->input->post('title'));
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
                    'id' => rand(0000, 9999),
                    'title' => $this->input->post('title'),
                    'image' => $gambar['file_name'],
                );
                // dead($save);
                $this->db->insert("gallery", $save);
                redirect('gallery/index');
            }
        }
    }
    public function update()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('title');
        $cek = $this->Mod_post->cekcategory($name);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Gallery title Sudah Ada!!"));
        } else {
            $nama = slug($this->input->post('title'));
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
                    'title' => $this->input->post('title'),
                    'image' => $gambar['file_name'],
                );
                // dead($save);
                $this->db->where('id', $id);
                $this->db->update('gallery', $save);
                redirect('gallery/index');
            }
        }
    }
    public function delete($id)
    {
        $g = $this->Mod_post->getgallery($id)->row_array();
        if ($g != null) {
            //hapus gambar yg ada diserver
            unlink('assets/foto/thumbnail/' . $g['image']);
        }
        $this->db->where('id', $id);
        $this->db->delete('gallery'); // Panggil fungsi delete() yang ada di SiswaModel.php
        $this->session->set_flashdata('success', 'Data Simpanan Wajib Berhasil Dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function post_gallery()
    {
        $data['title'] = "Post Gallery Data";
        $data['post_gallery'] = $this->Mod_post->post_gallery()->result();

        // dead($data);
        $this->template->load('layoutbackend', 'admin/post_gallery', $data);
    }
    public function add_post_gallery()
    {
        $data['title'] = "Post Gallery Data";
        $data['user'] = $this->db->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])->row_array();


        $data['gallery'] = $this->Mod_post->gallery()->result();
        $data['post'] = $this->Mod_post->post()->result();
        // dead($data['user']);
        $this->template->load('layoutbackend', 'admin/add_post_gallery', $data);
    }
    public function insert_gallery()
    {
        $title = $this->input->post('title');
        $cek = $this->Mod_post->cekpostgallery($title);
        $post_slug = url_title($title);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Post Gallery title Sudah Ada!!"));
        } else {
            $nama = slug($this->input->post('title'));
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
                    'id' => rand(0000, 9999),
                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'coach' => $this->input->post('coach'),
                    'harga'  => $this->input->post('harga'),
                    'discourse'  => $this->input->post('discourse'),
                    'format'  => $this->input->post('format'),
                    'topic'  => $this->input->post('topic'),
                    'ket'  => $this->input->post('ket'),
                    'gallery_id'  => $this->input->post('gallery_id'),
                    'date'  => date('Y-m-d H:i:s'),
                    'image' => $gambar['file_name'],
                    'slug'  => $post_slug,
                    'id_user'  => $this->input->post('id_user'),
                );
                // dead($save);
                $this->Mod_post->insertpost("posts_gallery", $save);
                redirect('gallery/post_gallery');
                // echo json_encode(array("status" => TRUE));
            } else { //Apabila tidak ada gambar yang di upload
                $save  = array(
                    'id' => rand(0000, 9999),
                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'coach' => $this->input->post('coach'),
                    'harga'  => $this->input->post('harga'),
                    'discourse'  => $this->input->post('discourse'),
                    'format'  => $this->input->post('format'),
                    'topic'  => $this->input->post('topic'),
                    'ket'  => $this->input->post('ket'),
                    'gallery_id'  => $this->input->post('gallery_id'),
                    'date'  => date('Y-m-d H:i:s'),
                    'slug'  => $post_slug,
                    'id_user'  => $this->input->post('id_user'),
                );
                // dead($save);
                $this->Mod_post->insertpost("posts_gallery", $save);
                redirect('gallery/post_gallery');
                // echo json_encode(array("status" => TRUE));
            }
        }
    }
    public function update_gallery()
    {
        if (!empty($_FILES['imagefile']['name'])) {
            // $this->_validate();
            $id = $this->input->post('id');

            $nama = slug($this->input->post('title'));
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
                if ($this->input->post('title')) {
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'link' => $this->input->post('link'),
                        'coach' => $this->input->post('coach'),
                        'harga'  => $this->input->post('harga'),
                        'discourse'  => $this->input->post('discourse'),
                        'format'  => $this->input->post('format'),
                        'topic'  => $this->input->post('topic'),
                        'ket'  => $this->input->post('ket'),
                        'gallery_id'  => $this->input->post('gallery_id'),
                        'date'  => date('Y-m-d H:i:s'),
                        'image' => $gambar['file_name'],
                        'slug'  => $post_slug,
                        'id_user'  => $this->input->post('id_user'),
                    );
                } else { //Jika password kosong
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'link' => $this->input->post('link'),
                        'coach' => $this->input->post('coach'),
                        'harga'  => $this->input->post('harga'),
                        'discourse'  => $this->input->post('discourse'),
                        'format'  => $this->input->post('format'),
                        'topic'  => $this->input->post('topic'),
                        'ket'  => $this->input->post('ket'),
                        'gallery_id'  => $this->input->post('gallery_id'),
                        'date'  => date('Y-m-d H:i:s'),
                        'image' => $gambar['file_name'],
                        'slug'  => $post_slug,
                        'id_user'  => $this->input->post('id_user'),
                    );
                }
                // dead($save);

                $g = $this->Mod_post->getImageGal($id)->row_array();

                if ($g != null) {

                    unlink('assets/foto/thumbnail/' . $g['image']);
                }
                $this->db->where('id', $id);
                $this->db->update('posts_gallery', $save);
                redirect('gallery/post_gallery');
            } else { //Apabila tidak ada gambar yang di upload
                if ($this->input->post('title')) {
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'link' => $this->input->post('link'),
                        'coach' => $this->input->post('coach'),
                        'harga'  => $this->input->post('harga'),
                        'discourse'  => $this->input->post('discourse'),
                        'format'  => $this->input->post('format'),
                        'topic'  => $this->input->post('topic'),
                        'ket'  => $this->input->post('ket'),
                        'gallery_id'  => $this->input->post('gallery_id'),
                        'date'  => date('Y-m-d H:i:s'),
                        // 'image' => $gambar['file_name'],
                        'slug'  => $post_slug,
                        'id_user'  => $this->input->post('id_user'),
                    );
                } else { //Jika password kosong
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'link' => $this->input->post('link'),
                        'coach' => $this->input->post('coach'),
                        'harga'  => $this->input->post('harga'),
                        'discourse'  => $this->input->post('discourse'),
                        'format'  => $this->input->post('format'),
                        'topic'  => $this->input->post('topic'),
                        'ket'  => $this->input->post('ket'),
                        'gallery_id'  => $this->input->post('gallery_id'),
                        'date'  => date('Y-m-d H:i:s'),
                        // 'image' => $gambar['file_name'],
                        'slug'  => $post_slug,
                        'id_user'  => $this->input->post('id_user'),
                    );
                }
                // dead($save);
                $this->Mod_post->updatepostgallery($id, $save);
                redirect('gallery/post_gallery');
                // echo json_encode(array("status" => TRUE));
            }
        } else {
            $id = $this->input->post('id');
            $nama = slug($this->input->post('title'));
            $post_slug = url_title($nama);
            if ($this->input->post('title')) {
                $save  = array(
                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'coach' => $this->input->post('coach'),
                    'harga'  => $this->input->post('harga'),
                    'discourse'  => $this->input->post('discourse'),
                    'format'  => $this->input->post('format'),
                    'topic'  => $this->input->post('topic'),
                    'ket'  => $this->input->post('ket'),
                    'gallery_id'  => $this->input->post('gallery_id'),
                    'date'  => date('Y-m-d H:i:s'),
                    // 'image' => $gambar['file_name'],
                    'slug'  => $post_slug,
                    'id_user'  => $this->input->post('id_user'),
                );
            } else {
                $save  = array(
                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'coach' => $this->input->post('coach'),
                    'harga'  => $this->input->post('harga'),
                    'discourse'  => $this->input->post('discourse'),
                    'format'  => $this->input->post('format'),
                    'topic'  => $this->input->post('topic'),
                    'ket'  => $this->input->post('ket'),
                    'gallery_id'  => $this->input->post('gallery_id'),
                    'date'  => date('Y-m-d H:i:s'),
                    // 'image' => $gambar['file_name'],
                    'slug'  => $post_slug,
                    'id_user'  => $this->input->post('id_user'),
                );
            }
            // dead($save);
            $this->Mod_post->updatepostgallery($id, $save);
            redirect('gallery/post_gallery');
            // echo json_encode(array("status" => TRUE));
        }
    }
    public function delete_postgal($id)
    {
        $g = $this->Mod_post->getImageGal($id)->row_array();
        if ($g != null) {
            //hapus gambar yg ada diserver
            unlink('assets/foto/thumbnail/' . $g['post_thumbnail']);
        }
        $this->Mod_post->delete_postgal($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        $this->session->set_flashdata('success', 'Data Simpanan Wajib Berhasil Dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
