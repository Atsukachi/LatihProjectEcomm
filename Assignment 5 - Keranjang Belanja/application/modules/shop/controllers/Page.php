<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_keranjang');
    }
    public function index()
    {
        $data['title'] = "Home";
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop');
        $this->load->view('page/home');
        $this->load->view('template/shop/footer_shop', $data);
    }
}
