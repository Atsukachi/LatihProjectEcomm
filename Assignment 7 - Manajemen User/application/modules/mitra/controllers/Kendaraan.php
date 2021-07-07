<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kendaraan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kendaraan');
    }
    public function index()
    {
        
        $data['title'] = "Service Kendaraan";
        
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('kendaraan/service', $data);
        $this->load->view('template/shop/footer_shop');
    }

    
}
