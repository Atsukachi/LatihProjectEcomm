<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Shopping extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_keranjang');
    }
    public function index()
    {
        $data['title'] = "Product";
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $data['prodall']  = $this->m_keranjang->get_produk_all();
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('template/shop/sidebar_shop', $data);
        $this->load->view('shopping/product', $data);
        $this->load->view('template/shop/footer_shop2');
    }
    public function kategori($id)
    {
        $data['title'] = "Category";
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $data['getkatid'] = $this->m_keranjang->get_kat_id($id);
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('template/shop/sidebar_shop', $data);
        $this->load->view('shopping/category', $data);
        $this->load->view('template/shop/footer_shop');
    }
    public function detail($id)
    {
        $data['title'] = "Detail";
        $data['produk'] = $this->m_keranjang->get_detail($id);
        $data['prodall']  = $this->m_keranjang->get_produk_all();
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('shopping/detail', $data);
        $this->load->view('template/shop/footer_shop');
    }
    public function cart()
    {
        $data['title'] = "Cart";
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('shopping/cart', $data);
        $this->load->view('template/shop/footer_shop');
    }
    public function checkout()
    {
        $data['title'] = "Checkout";
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('shopping/checkout', $data);
        $this->load->view('template/shop/footer_shop');
    }
    function tambah()
    {
        $data_produk = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('nama'),
            'price' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar'),
            'qty' => $this->input->post('qty')
        );
        $this->cart->insert($data_produk);
        redirect('shop/shopping');
    }
    function hapus($rowid)
    {
        if ($rowid == "all") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('shop/shopping/cart');
    }
    function ubah_cart()
    {
        $cart_info = $_POST['cart'];
        foreach ($cart_info as $id => $cart) {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
        redirect('shop/shopping/cart');
    }
    public function proses_order()
    {
        //-------------------------Input data pelanggan--------------------------
        $data_pelanggan = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')
        );
        $id_pelanggan = $this->m_keranjang->tambah_pelanggan($data_pelanggan);

        //-------------------------Input data order------------------------------
        $data_order = array(
            'tanggal' => date('Y-m-d'),
            'pelanggan' => $id_pelanggan
        );
        $id_order = $this->m_keranjang->tambah_order($data_order);

        //-------------------------Input data detail order-----------------------
        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $data_detail = array(
                    'order_id' => $id_order,
                    'produk' => $item['id'],
                    'qty' => $item['qty'],
                    'harga' => $item['price']
                );
                $proses = $this->m_keranjang->tambah_detail_order($data_detail);
            }
        }
        //-------------------------Hapus shopping cart--------------------------
        $this->cart->destroy();
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->session->set_flashdata('pesan', 'order berhasil');
        redirect('shop/page');
    }
}
