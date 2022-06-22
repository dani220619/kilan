<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller
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

        // dead($data);
        $this->template->load('layoutbackend', 'category/index', $data);
    }
    public function insert_category()
    {
        $name = $this->input->post('name');
        $cek = $this->Mod_post->cekcategory($name);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Post title Sudah Ada!!"));
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
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'image' => $gambar['file_name'],
                );
                // dead($save);
                $this->db->insert("category", $save);
                redirect('category/index');
            }
        }
    }
    public function update_category()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $cek = $this->Mod_post->cekcategory($name);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Post title Sudah Ada!!"));
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
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'image' => $gambar['file_name'],
                );
                // dead($save);
                $this->db->where('id', $id);
                $this->db->update('category', $save);
                redirect('category/index');
            }
        }
    }
    public function delete($id)
    {
        $g = $this->Mod_post->getcategory($id)->row_array();
        if ($g != null) {
            //hapus gambar yg ada diserver
            unlink('assets/foto/thumbnail/' . $g['image']);
        }
        $this->db->where('id', $id);
        $this->db->delete('category'); // Panggil fungsi delete() yang ada di SiswaModel.php
        $this->session->set_flashdata('success', 'Data Simpanan Wajib Berhasil Dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
