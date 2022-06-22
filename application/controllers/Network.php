<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Network extends MY_Controller
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
        $data['title'] = "Network Data";
        $data['network'] = $this->Mod_post->network()->result();

        // dead($data);
        $this->template->load('layoutbackend', 'admin/network', $data);
    }
    public function insert()
    {
        $name = $this->input->post('title');
        $cek = $this->Mod_post->ceknetwork($name);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Network title Sudah Ada!!"));
        } else {
            $nama = slug($this->input->post('name'));
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
                    'about' => $this->input->post('about'),
                    'sector' => $this->input->post('sector'),
                    'founded' => $this->input->post('founded'),
                    'location' => $this->input->post('location'),
                    'web' => $this->input->post('web'),
                    'email' => $this->input->post('email'),
                    'ig' => $this->input->post('ig'),
                    'image' => $gambar['file_name'],
                );
                // dead($save);
                $this->db->insert("network", $save);
                redirect('network');
            }
        }
    }
    public function update()
    {
        if (!empty($_FILES['imagefile']['name'])) {
            // $this->_validate();
            $id = $this->input->post('id');

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
                //Jika Password tidak kosong
                if ($this->input->post('title')) {
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'about' => $this->input->post('about'),
                        'sector' => $this->input->post('sector'),
                        'founded' => $this->input->post('founded'),
                        'location' => $this->input->post('location'),
                        'web' => $this->input->post('web'),
                        'email' => $this->input->post('email'),
                        'ig' => $this->input->post('ig'),
                        'image' => $gambar['file_name'],
                    );
                } else { //Jika password kosong
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'about' => $this->input->post('about'),
                        'sector' => $this->input->post('sector'),
                        'founded' => $this->input->post('founded'),
                        'location' => $this->input->post('location'),
                        'web' => $this->input->post('web'),
                        'email' => $this->input->post('email'),
                        'ig' => $this->input->post('ig'),
                        'image' => $gambar['file_name'],
                    );
                }
                // dead($save);

                $g = $this->Mod_post->getimgnet($id)->row_array();

                if ($g != null) {
                    //hapus gambar yg ada diserver
                    unlink('assets/foto/thumbnail/' . $g['image']);
                }

                $this->Mod_post->updatenet($id, $save);
                redirect('network');
                // echo json_encode(array("status" => TRUE));
            } else { //Apabila tidak ada gambar yang di upload
                // $gambar = $this->upload->data();
                //Jika Password tidak kosong
                if ($this->input->post('title')) {
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'about' => $this->input->post('about'),
                        'sector' => $this->input->post('sector'),
                        'founded' => $this->input->post('founded'),
                        'location' => $this->input->post('location'),
                        'web' => $this->input->post('web'),
                        'email' => $this->input->post('email'),
                        'ig' => $this->input->post('ig'),

                    );
                } else { //Jika password kosong
                    $save  = array(
                        'title' => $this->input->post('title'),
                        'about' => $this->input->post('about'),
                        'sector' => $this->input->post('sector'),
                        'founded' => $this->input->post('founded'),
                        'location' => $this->input->post('location'),
                        'web' => $this->input->post('web'),
                        'email' => $this->input->post('email'),
                        'ig' => $this->input->post('ig'),

                    );
                }
                // dead($save);
                $this->Mod_post->updatenet($id, $save);
                redirect('network');
                // echo json_encode(array("status" => TRUE));
            }
        } else {
            $id = $this->input->post('id');
            $nama = slug($this->input->post('title'));
            if ($this->input->post('title')) {
                $save  = array(
                    'title' => $this->input->post('title'),
                    'about' => $this->input->post('about'),
                    'sector' => $this->input->post('sector'),
                    'founded' => $this->input->post('founded'),
                    'location' => $this->input->post('location'),
                    'web' => $this->input->post('web'),
                    'email' => $this->input->post('email'),
                    'ig' => $this->input->post('ig'),
                );
            } else {
                $save  = array(
                    'title' => $this->input->post('title'),
                    'about' => $this->input->post('about'),
                    'sector' => $this->input->post('sector'),
                    'founded' => $this->input->post('founded'),
                    'location' => $this->input->post('location'),
                    'web' => $this->input->post('web'),
                    'email' => $this->input->post('email'),
                    'ig' => $this->input->post('ig'),
                );
            }
            // dead($save);
            $this->Mod_post->updatenet($id, $save);
            redirect('network');
            // echo json_encode(array("status" => TRUE));
        }
    }
    public function delete($id)
    {
        $g = $this->Mod_post->getimgnet($id)->row_array();
        if ($g != null) {
            //hapus gambar yg ada diserver
            unlink('assets/foto/thumbnail/' . $g['image']);
        }
        $this->Mod_post->delete_net($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        $this->session->set_flashdata('success', 'Data Simpanan Wajib Berhasil Dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
