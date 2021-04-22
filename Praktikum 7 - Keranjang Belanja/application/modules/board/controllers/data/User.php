<?php
class User extends CI_Controller
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
        $judul['title'] = "Data Pengguna";
        $pesan['users'] = $this->m_data->tampil_user()->result();
        $this->load->view('template/auth/head', $judul);
        $this->load->view('template/auth/navbar');
        $this->load->view('template/auth/sidebar');
        $this->load->view('userv', $pesan);
        $this->load->view('template/auth/footer');
    }
    public function tambah()
    {
        $judul['title'] = "Tambah Data Pengguna";

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[users.email]',
            ['is_unique' => 'Email has been used.']
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password_conf', 'Password Configuration', 'required|trim|matches[password]');
        if ($this->form_validation->run() == TRUE) {
            $data['nama'] = $this->input->post('name');
            $data['username'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            $data['password'] = md5($this->input->post('password'));
            $this->m_data->daftar($data);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect('board/data/user');
        } else {
            $this->load->view('template/auth/head', $judul);
            $this->load->view('template/auth/navbar');
            $this->load->view('template/auth/sidebar');
            $this->load->view('tambahuserv');
            $this->load->view('template/auth/footer');
        }
    }
    public function edit_user()
    {
        $judul['title'] = "Edit Data Pengguna";
        $id = $this->uri->segment(5);
        $data['edit_user'] = $this->m_data->get_data_edit($id);
        $this->load->view('template/auth/head', $judul);
        $this->load->view('template/auth/navbar');
        $this->load->view('template/auth/sidebar');
        $this->load->view('edituserv', $data);
        $this->load->view('template/auth/footer');
    }
    public function edit()
    {
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $judul['title'] = "Edit Data Pengguna";
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password_conf', 'Password Configuration', 'required|trim|matches[password]');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $jenis = $this->input->post('jenis');
        $data = array(
            'id_user' => $id_user,
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'jenis' => $jenis
        );
        $this->m_data->update_user($data, $id_user);
        $this->session->set_flashdata('pesan', 'diubah');
        redirect('board/data/user');
    }
    public function delete_user()
    {
        $id = $this->uri->segment(5);
        $this->session->set_flashdata('pesan', 'terhapus');
        $this->m_data->delete_user($id);
        redirect('board/data/user');
    }
}
