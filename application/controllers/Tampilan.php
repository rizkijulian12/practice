<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	  $this->load->model('daftar_menu_model', 'daftar_menu_model');

	}

	public function index()
	{
     	$this->load->view('templated');
	}

	public function tampilan($id=null)
	{
		$data['content'] ='daftar_menu/tampilan';
		$data['record'] = $this->daftar_menu_model->get_data($id);
     	$this->load->view('template',$data);
	}

	public function tambah()
	{
		$data['content'] ='daftar_menu/form_tambah';
     	$this->load->view('template',$data);
	}

		public function ubah($id=null)
	{
		$data['content'] ='daftar_menu/form_ubah';
		$data['record'] = $this->daftar_menu_model->get_data_daftar_menu($id);

     	$this->load->view('template',$data);
	}

	public function proses_tambah()
	{
		$this->load->library('upload');
	$config['upload_path'] = './images_menu/'; //path folder
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
				'nama_menu' => $this->input->post('nama_menu'),
				'foto_menu' => $dokumen['file_name'],
				'harga_menu'=> $this->input->post('harga'),
				'id_resto' => $this->input->post('id_resto'),
			);

						$insert = $this->daftar_menu_model->insert_data($data);
		//helper_log("add", "Menambah Daftar Pengguna");

			redirect ('restoran');
			//helper_log("add", "Menambah Daftar Pengguna");
	}

	}
}

		public function proses_ubah($id=null,$id2=null)
	{
		$data = array(
			'nama_menu' => $this->input->post('nama_menu'),
			'foto_menu' => $this->input->post('gambar_menu'),
			'harga_menu'=> $this->input->post('harga'),
			 );
		$update = $this->daftar_menu_model->update_data($data,$id);
		redirect('daftar_menu/tampilan/'.$id2);

	}

		public function proses_hapus($id=null,$id2=null)
	{

		$delete = $this->daftar_menu_model->delete_data($id);
		redirect('daftar_menu/tampilan/'.$id2);
	}


}
