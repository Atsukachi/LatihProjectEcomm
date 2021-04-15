<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_keranjang');
    }
    public function index()
    {
        $data['title'] = "Tama.id";
        $this->load->view('template/header_shop.php', $data);
        $this->load->view('template/navbar_shop.php');
        $this->load->view('template/product_shop.php');
        $this->load->view('template/footer_shop2.php');
    }
}
