<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	  $this->load->model('restoran_model', 'restoran_model');
		$this->load->library('pagination');

	}

	public function index()
	{
		//konfigurasi pagination
	        $config['base_url'] = site_url('restoran/index'); //site url
	        $config['total_rows'] = $this->db->count_all('restoran'); //total row
	        $config['per_page'] = 5;  //show record per halaman
	        $config["uri_segment"] = 3;  // uri parameter
	        $choice = $config["total_rows"] / $config["per_page"];
	        $config["num_links"] = floor($choice);

	        // Membuat Style pagination untuk BootStrap v4
	      	$config['first_link']       = 'First';
	        $config['last_link']        = 'Last';
	        $config['next_link']        = 'Next';
	        $config['prev_link']        = 'Prev';
	        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['prev_tagl_close']  = '</span>Next</li>';
	        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $config['first_tagl_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['last_tagl_close']  = '</span></li>';

	        $this->pagination->initialize($config);
	        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model.
	        $data['record'] = $this->restoran_model->get_mahasiswa_list($config["per_page"], $data['page']);

	        $data['pagination'] = $this->pagination->create_links();
					$data['content'] = 'restoran/tampilan';
	        //load view mahasiswa view
	        $this->load->view('template',$data);
	    }

	public function search(){
	$keyword = $this->input->post('keyword');
	$data['content'] ='restoran/tampilan';
	$data['record']  = $this->restoran_model->get_product_keyword($keyword);
	$this->load->view('template',$data);
}
	public function file()
	{
     	$this->load->base_url('images');
	}
	public function tambah()
	{
		$data['content'] ='restoran/form_tambah';
     	$this->load->view('template',$data);
	}
	public function ubah($id=null)
	{
		$data['content'] ='restoran/form_ubah';
			$data['record'] = $this->restoran_model->get_data_restoran($id);
     	$this->load->view('template',$data);
	}

	public function proses_tambah()
	{
		$this->load->library('upload');
		$this->load->library('session');
	$config['upload_path'] = './images/'; //path folder
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
				'nama_pemilik' => $this->input->post('nama_pemilik'),
				'nama_resto'=> $this->input->post('nama_warung'),
				'alamat_resto' => $this->input->post('alamat_warung'),
				'telepon' => $this->input->post('tlp_warung'),
				'foto_resto' => $dokumen['file_name']
			);

						$insert = $this->restoran_model->insert($data);
		//helper_log("add", "Menambah Daftar Pengguna");
			$this->session->set_flashdata('message', "<div style='background-color:#9bfe9c;width:100%;height:50px;border-radius:5px;'><font style='font-size:14px;'>Data Berhasil Ditambah</font></div>");
			redirect ('restoran');
			//helper_log("add", "Menambah Daftar Pengguna");
	  }
	}
}

		public function proses_ubah()
	{
		$id = $this->uri->segment(3);

	            $config['upload_path']         = './images/';  // foler upload
	            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
	            $config['max_size']             = 3000;
	            $config['max_width']            = 1024;
	            $config['max_height']           = 768;

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload('file')) //sesuai dengan name pada form
	            {
	                   echo 'anda belum upload';
	            }
	            else
	            {
	                //tampung data dari form
	                $nama = $this->input->post('nama');
	                $harga = $this->input->post('harga');
	                $file = $this->upload->data();
	                $gambar = $file['file_name'];

	                $this->restoran_model->update(array(
										'nama_pemilik' => $this->input->post('nama_pemilik'),
										'nama_resto'=> $this->input->post('nama_warung'),
										'alamat_resto' => $this->input->post('alamat_warung'),
										'telepon' => $this->input->post('tlp_warung'),
										'foto_resto' => $gambar
									), array('id' => $id
	                        )
	                );
	                $this->session->set_flashdata('msg','data berhasil di update');
	                redirect('restoran');
	            }

	            $this->load->view('template',$data);
						}

		public function proses_hapus($id=null)
	{

		$delete = $this->restoran_model->delete_data($id);
		redirect('restoran');
	}
}
