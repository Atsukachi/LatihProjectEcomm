<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('simple_login', 'upload');
        $this->simple_login->cek_login();
        $this->load->model('m_mitra');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['title'] = "Data Produk";
        $data['produk'] = $this->m_mitra->tampil_produk()->result();
        $data['id'] = $this->m_mitra->tampil_kategori('id')->result();
        $this->load->view('template/mitra/head', $data);
        $this->load->view('template/mitra/navbar');
        $this->load->view('template/mitra/sidebar');
        $this->load->view('barangv', $data);
        $this->load->view('template/mitra/footer');
    }
    public function tambah()
    {
        $judul['title'] = "Tambah Data Produk";
        $data['id'] = $this->m_mitra->tampil_kategori('id')->result();
        $this->load->view('template/mitra/head', $judul);
        $this->load->view('template/mitra/navbar');
        $this->load->view('template/mitra/sidebar');
        $this->load->view('tambahbarangv', $data);
        $this->load->view('template/mitra/footer');
    }
    public function tambah_produk()
    {
        $this->form_validation->set_rules(
            'nama_produk',
            'Produk',
            'required|is_unique[tbl_produk.nama_produk]',
            ['is_unique' => 'Product name has been used.']
        );
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $nama_produk = $this->input->post('nama_produk');
            $deskripsi = $this->input->post('deskripsi');
            $id_mitra = $this->session->userdata['id_login']['id'];
            $harga = $this->input->post('harga');
            $gambar = $this->input->post('gambar');
            $kategori = $this->input->post('kategori');
            if ($gambar == '') {
                
            } else {
                $config['upload_path']          = './assets/gambar/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    echo "upload Gagal";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_produk' => "",
                'nama_produk' => $nama_produk,
                'id_mitra' => $id_mitra,
                'deskripsi' => $deskripsi,
                'harga_produk' => $harga,
                'gambar' => $gambar,
                'id_kategori' => $kategori
            );
            $this->m_mitra->tambah_produk($data, 'tbl_produk');
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect('mitra/data/produk');
        }
    }

    public function delete($id){
        $id_produk = array('id_produk'=>$id);
        $this->m_mitra->delete_produk($id_produk, 'tbl_produk');
        redirect('mitra/data/produk');
    }

    public function edit($id){
       
        $judul['title'] = "Edit Data Produk";
        $id_produk = array('id_produk' => $id);
        $data['produk'] = $this->m_mitra->edit_produk($id_produk, 'tbl_produk')->result();
        $data['getkatall'] = $this->m_mitra->tampil_kategori()->result();
        $this->load->view('template/mitra/head', $judul);
        $this->load->view('template/mitra/navbar');
        $this->load->view('template/mitra/sidebar');
        $this->load->view('editbarangv', $data);
        $this->load->view('template/mitra/footer');
    }

    public function update(){
        $id = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $id_mitra = $this->input->post('id_mitra');
        $gambar = $this->input->post('gambar');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_produk' => $nama_produk,
            'deskripsi' => $deskripsi,
            'harga_produk' => $harga,
            'id_mitra' => $id_mitra,
            'gambar' => $gambar,
            'kategori' => $kategori
        );

        $id_produk = array(
            'id_produk' => $id
        );
        $this->m_mitra->update_data($id_produk, $data, 'tbl_produk');
        redirect('mitra/data/produk');
      
    }
   
}
