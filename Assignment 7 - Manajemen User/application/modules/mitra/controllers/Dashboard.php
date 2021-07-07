<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        
        parent::__construct();
        $this->load->library('simple_login');
        $this->load->model('m_mitra');
    }
    //Load Halaman dashboard
    public function index()
    {
        $data['title'] = "Halaman Dashboard";
        $this->load->view('template/mitra/head', $data);
        $this->load->view('template/mitra/navbar');
        $this->load->view('template/mitra/sidebar');
        $this->load->view('dashboardv');
        $this->load->view('template/mitra/footer');
    }
}
