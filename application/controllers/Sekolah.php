<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	$this->load->model('sekolah_model', 'sekolah_model');
	}

	public function index()
	{
		$data['content'] = 'sekolah/tampilan';
		$data['record'] = $this->sekolah_model->get_data();
		$this->load->view('template',$data);
	}

	public function tambah()
	{
		$data['content'] = 'sekolah/form_tambah';
		$this->load->view('template',$data);
	}

	public function ubah($id=null)
	{
		$data['content'] = 'sekolah/form_ubah';
		$data['record'] = $this->sekolah_model->get_data_sekolah($id);
		
		$this->load->view('template',$data);
	}
	public function proses_tambah()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
		);

		$insert = $this->sekolah_model->insert_data($data);
		redirect('sekolah');
	}

	public function proses_ubah($id=null)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
		);

		$update = $this->sekolah_model->update_data($data,$id);
		redirect('sekolah');
	}

	public function proses_hapus($id=null)
	{
		$delete = $this->sekolah_model->delete_data($id);
		redirect('sekolah');
	}
}
