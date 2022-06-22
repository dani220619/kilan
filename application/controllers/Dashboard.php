<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_aplikasi');
        $this->load->model('Mod_post');
        $this->load->library('fungsi');
        $this->load->library('user_agent');
        $this->load->helper('myfunction_helper');

        // backButtonHandle();
    }

    function index()
    {
        $nis = $this->db->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['detail'] = $nis;

        $data['tot_posts'] = $this->Mod_post->tot_posts()->row_array();
        $data['tot_gal'] = $this->Mod_post->tot_gal()->row_array();
        $data['adm'] = $this->Mod_post->tot_adm()->row_array();

        // dead($data['tot_posts']);
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            redirect('login');
        } else {
            $this->template->load('layoutbackend', 'dashboard/dashboard', $data);
        }
    }
}
/* End of file Controllername.php */
