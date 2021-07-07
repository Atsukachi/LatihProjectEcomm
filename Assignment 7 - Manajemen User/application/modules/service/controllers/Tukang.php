<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tukang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Tukang');
    }
    public function index()
    {
        

        $data['title'] = "Pembangunan";
        
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('tukang/tukang', $data);
        $this->load->view('template/shop/footer_shop');
    }

   
}
