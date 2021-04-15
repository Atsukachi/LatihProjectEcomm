<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('simple_login');
        $this->simple_login->cek_login();
        $this->load->model('m_user');
        $this->load->helper('url');
    }
    public function index()
    {
        // load view admin/Users.php
        $data['users'] = $this->m_user->tampil_user()->result();
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('admin/userv', $data);
        $this->load->view('template/footer');
    }
}
