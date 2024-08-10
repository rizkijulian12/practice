<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	$this->load->model('login_model', 'login_model');
	}

	public function index()
	{
		$this->load->view('login/tampilan');
	}

	public function proses_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');	
	
		$data = array(
			'username' => $username,
			'password' => $password,
			);
		
		$cek_nama = $this->login_model->cek_nama($username);
		$cek = $this->login_model->cek_login($data)->num_rows();
		if ($cek > 0){
			
			$data_session = array(
				'nama' => $cek_nama->nama,
				'username' => $username,
			);
			
			$this->session->set_userdata($data_session);

			redirect('restoran');
		}	else {
			echo "username atau password salah";
		}
	}



}
