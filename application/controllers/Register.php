<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	  $this->load->model('register_model', 'register_model');

	}

	public function index()
	{
		$this->load->view('register/tampilan');
	}

	public function tambah()
	{
		$data['content'] ='register/form_tambah';
     	$this->load->view('template',$data);	
	}

	public function proses_tambah()
	{
		$this->load->library('upload');
	$config['upload_path'] = './imgs/'; //path folder
			$config['allowed_types'] = 'pdf|jpg|png|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size'] = '2048'; //maksimum besar file 2M
			$config['max_width']  = '5000'; //lebar maksimum 5000 px
	$config['max_height']  = '5000'; //tinggi maksimu 5000 px
	$config['overwrite']  = TRUE; //tinggi maksimu 5000 px
			$this->upload->initialize($config);
			if($_FILES['file']['name'])
	{
		if ($this->upload->do_upload('file')){
			$dokumen = $this->upload->data();
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password'=> $this->input->post('password'),
				'email' => $this->input->post('email'),
				'gambar' => $dokumen['file_name']
			);

						$insert = $this->register_model->insert_data($data);
		//helper_log("add", "Menambah Daftar Pengguna");

			redirect ('login');
			//helper_log("add", "Menambah Daftar Pengguna");
	}

	}
}


}