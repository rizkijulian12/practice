<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	  $this->load->model('contact_model', 'contact_model');

	}

	public function index()
	{
		$data['content'] ='contact/tampilan';
		$data['record'] =$this->contact_model->get_data();
     	$this->load->view('template',$data);
	}
	public function tambah(){
		$data['content'] = 'contact/form_tambah';
		$this->load->view('templated',$data);
	}
	public function proses_tambah()
{
	$this->load->library('session');
	$data = array(
		'email' => $this->input->post('email'),
		'komentar' => $this->input->post('komentar'),
	);
	$insert = $this->contact_model->insert_data($data);
	$this->session->set_flashdata('message', "<div style='background-color:#9bfe9c;width:100%;height:50px;border-radius:5px;'><font style='font-size:14px;'>Terima Kasih atas masukan Anda</font></div>");
	redirect('contact/tambah');
}
		public function proses_hapus($id=null)
	{

		$delete = $this->contact_model->delete_data($id);
		redirect('contact');
	}


}
