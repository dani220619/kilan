<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct()
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
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        $data['line_up'] = $this->Mod_post->line_up()->result();
        $data['life_light'] = $this->Mod_post->life_light()->result();
        $data['airdrops'] = $this->Mod_post->airdrops()->result();
        $data['the_expert'] = $this->Mod_post->the_expert()->result();
        $data['beyond_tech'] = $this->Mod_post->beyond_tech()->result();
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/index', $data);
        $this->load->view('templates/footer_frontend.php', $data);
    }
    public function gallery_list()
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        $data['socialware'] = $this->Mod_post->socialware()->result();
        $data['education'] = $this->Mod_post->education()->result();
        $data['inovation'] = $this->Mod_post->inovation()->result();
        $data['artwork'] = $this->Mod_post->artwork()->result();
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/gallery', $data);
        $this->load->view('templates/footer_frontend.php', $data);
    }

    public function list($id)
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        $data['post'] = $this->Mod_post->show_post(array('category_id' => $id))->result();
        $data['category'] = $this->Mod_post->category_list($id)->row_array();
        // dead($data['posts']);
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/program', $data);
        $this->load->view('templates/footer_frontend.php');
    }
    public function about_us()
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        // $data['post'] = $this->Mod_post->show_post()->result();
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/about_us');
        $this->load->view('templates/footer_frontend.php');
    }
    public function content($post_slug)
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        // $post_slug = url_title($post_slug);
        $cate = $this->db->get_where('posts', ['post_slug' => $post_slug])->row_array();
        $id = $cate['category_id'];
        $data['content'] = $this->db->get_where('posts', ['post_slug' => $post_slug])->row();
        $data['categ'] = $this->Mod_post->getcontent($id)->row_array();
        // dead($data['categ']);
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/content', $data);
        $this->load->view('templates/footer_frontend.php');
    }
    public function isi_net($id)
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        $data['network'] = $this->db->get_where('network', ['id' => $id])->row();
        $data['categ'] = $this->Mod_post->getcontent($id)->row_array();

        // dead($data['categ']);
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/isi_net', $data);
        $this->load->view('templates/footer_frontend.php');
    }
    public function gallery($slug)
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        $cate = $this->db->get_where('posts_gallery', ['slug' => $slug])->row_array();
        $id = $cate['gallery_id'];
        $data['cont_gallery'] = $this->db->get_where('posts_gallery', ['slug' => $slug])->row();
        $data['G'] = $this->Mod_post->cekgallery($id)->row();

        // dead($id);
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/isi_gal', $data);
        $this->load->view('templates/footer_frontend.php');
    }
    public function gallery_two($slug)
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        // $data['network'] = $this->db->get_where('network', ['id' => $id])->row();
        $data['cont_gallery'] = $this->db->get_where('posts_gallery', ['slug' => $slug])->row();

        // dead($data['cont_gallery']);
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/isi_gal2', $data);
        $this->load->view('templates/footer_frontend.php');
    }
    public function list_gallery($id)
    {
        $data['apl'] = $this->db->get('aplikasi')->row_array();
        $data['pg'] = $this->Mod_post->show_post_gal(array('gallery_id' => $id))->result();
        $data['G'] = $this->Mod_post->gallery_list($id)->row_array();
        // dead($data['post_gallery']);
        $this->load->view('templates/header_frontend.php', $data);
        $this->load->view('frontend/gallery_list', $data);
        $this->load->view('templates/footer_frontend.php');
    }
}
/* End of file Controllername.php */
