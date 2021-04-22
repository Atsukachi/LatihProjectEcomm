<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url', 'form'));
		$this->load->model('m_account'); //call model
	}
	public function index()
	{
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
			$this->m_account->daftar($data);
			$pesan['message'] = "Pendaftaran Berhasil!";
			$this->load->view('loginv', $pesan);
		} else {
			$this->load->view('registerv');
		}
	}
}
