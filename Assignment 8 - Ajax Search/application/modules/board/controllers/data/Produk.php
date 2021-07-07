<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('simple_login');
        $this->simple_login->cek_login();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['title'] = "Data Produk";
        $data['produk'] = $this->m_data->tampil_produk()->result();
        $this->load->view('template/auth/head', $data);
        $this->load->view('template/auth/navbar');
        $this->load->view('template/auth/sidebar');
        $this->load->view('barangv', $data);
        $this->load->view('template/auth/footer');
    }
    public function tambah()
    {
        $judul['title'] = "Tambah Data Produk";
        $data['id'] = $this->m_data->tampil_kategori('id')->result();
        $this->load->view('template/auth/head', $judul);
        $this->load->view('template/auth/navbar');
        $this->load->view('template/auth/sidebar');
        $this->load->view('tambahbarangv', $data);
        $this->load->view('template/auth/footer');
    }
    public function tambah_produk()
    {
        $this->form_validation->set_rules(
            'nama_produk',
            'Produk',
            'required|is_unique[produk.nama_produk]',
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
                'deskripsi' => $deskripsi,
                'harga_produk' => $harga,
                'foto' => $gambar,
                'kategori' => $kategori
            );
            $this->m_data->tambah_produk($data, 'produk');
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect('board/data/produk');
        }
    }
    public function edit($id)
    {
        $judul['title'] = "Tambah Data Produk";
        $data['produk'] = $this->m_data->edit_id_produk($id);
        $data['kat'] = $this->m_data->edit_id_kategori($id);
        $data['getkatall'] = $this->m_data->tampil_kategori()->result();
        $this->load->view('template/auth/head', $judul);
        $this->load->view('template/auth/navbar');
        $this->load->view('template/auth/sidebar');
        $this->load->view('editbarangv', $data);
        $this->load->view('template/auth/footer');
    }
}
