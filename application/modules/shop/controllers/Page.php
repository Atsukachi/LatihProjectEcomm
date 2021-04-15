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
        $data['produk'] = $this->m_keranjang->get_produk_all();
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/header', $data);
        $this->load->view('shopping/list_produk', $data);
        $this->load->view('template/footer');
    }
    public function tentang()
    {
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/header', $data);
        $this->load->view('page/tentangv', $data);
        $this->load->view('template/footer');
    }
    public function cara_bayar()
    {
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/header', $data);
        $this->load->view('page/cara_bayarv', $data);
        $this->load->view('template/footer');
    }
}
