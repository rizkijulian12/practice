<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	  $this->load->model('bulan_model', 'bulan_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		//set params
  $params = array();
  //set records per page
        $limit_page = 6;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->bulan_model->get_total();

        if ($total > 0)
        {
            // get current page records

            $config['base_url'] = base_url() . 'bulan/index';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            //paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;

            //bootstrap pagination
            $config['full_tag_open'] = '<ul class="pagination">';
   $config['full_tag_close'] = '</ul>';
   $config['first_link'] = '&laquo; First';
   $config['first_tag_open'] = '<li>';
   $config['first_tag_close'] = '</li>';
   $config['last_link'] = 'Last &raquo';
   $config['last_tag_open'] = '<li>';
   $config['last_tag_close'] = '</li>';
   $config['next_link'] = 'Next';
   $config['next_tag_open'] = '<li>';
   $config['next_tag_close'] = '<li>';
   $config['prev_link'] = 'Prev';
   $config['prev_tag_open'] = '<li>';
   $config['prev_tag_close'] = '<li>';
   $config['cur_tag_open'] = '<li class="active"><a href="#">';
   $config['cur_tag_close'] = '</a></li>';
   $config['num_tag_open'] = '<li>';
   $config['num_tag_close'] = '</li>';

            $this->pagination->initialize($config);

            // build paging links
            $params['links'] = $this->pagination->create_links();
        }


				$params['record'] = $this->bulan_model->get_current_page($limit_page, $page * $limit_page);
				$params['content'] ='bulan/tampilan';
				$this->load->view('template',$params);
 }
 public function search()
 {
 $limit_per_page = 8;
 $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		 $total_records = $this->bulan_model->get_total();

		 if ($total_records > 0)
		 {
				 // get current page records
	 //base url dasar untuk pagination
	 $config['base_url']   = base_url() . 'bulan/index';
	 //query untuk jumlah total record yang ada;
	 $config['total_rows']   = $total_records;
	 //variabel angka untuk jumlah limit record yang di tampilkan pada setiap halaman
	 $config['per_page']   = $limit_per_page;

	 //untuk mengatur pada segment berapa urutan paging di baca pada url
	 $config["uri_segment"]  = 3;
	 //untuk mengatur page number
	 $config['use_page_numbers'] = TRUE;
	 //untuk menyimpan penggunaan query
	 $config['reuse_query_string'] = TRUE;

	 //style untuk awal sebuah paging
	 $config['full_tag_open'] = '<div class="text-center"><ul class="pagination">';
	 $config['full_tag_close'] = '</ul></div>';
	 //style untuk klik awal halaman
	 $config['first_link'] = '<i class="fa  fa-fast-backward"></i> Awal';
	 $config['first_tag_open'] = '<li>';
	 $config['first_tag_close'] = '</li>';
	 //style untuk klik akhir halaman
	 $config['last_link'] = 'Akhir <i class="fa  fa-fast-forward"></i>';
	 $config['last_tag_open'] = '<li>';
	 $config['last_tag_close'] = '</li>';
	 //style untuk klik halaman selanjutnya
	 $config['next_link'] = 'Selanjutnya <i class="fa fa-arrow-right"></i>';
	 $config['next_tag_open'] = '<li>';
	 $config['next_tag_close'] = '</li>';
	 //style untuk klik halaman sebelumnya
	 $config['prev_link'] = '<i class="fa fa-arrow-left"></i> Sebelumnya';
	 $config['prev_tag_open'] = '<li>';
	 $config['prev_tag_close'] = '</li>';
	 //style untuk halaman aktif
	 $config['cur_tag_open'] = '<li><a href="#">';
	 $config['cur_tag_close'] = '</a></li>';
	 //style untuk halaman lainnya
	 $config['num_tag_open'] = '<li>';
	 $config['num_tag_close'] = '</li>';

				 $this->pagination->initialize($config);

		 }

 // menampilkan halaman awal controller
 $data['title']    = 'Search'; // judul halaman;
 $data['content']  = 'bulan/tampilan'; // load halaman pada views;
 $data['css']    = 'css'; // load css jika diperlukan jika tidak gunakan FALSE;
 $data['js']     = 'js'; // load js jika di perlukan jika tidak gunakan FALSE;
 $data['link']   = 'bulan/tambah'; // variabel link untuk menambahkan data pada button tambah data jika tidak digunakan tambahkan FALSE;
 $data["record"]   = $this->bulan_model->get_record($limit_per_page, $start_index);
 $data["links"]    = $this->pagination->create_links();
 //load view template
 $this->load->view('template', $data);
}
	public function tambah()
	{
		$data['content'] ='bulan/form_tambah';
     	$this->load->view('template',$data);
	}
	public function ubah($id=null)
	{
		$data['content'] ='bulan/form_ubah';
		$data['record'] = $this->bulan_model->get_data_bulan($id);

     	$this->load->view('template',$data);
	}

	public function proses_tambah()
	{
			$data = array(
				'nama_bulan' => $this->input->post('bulan'),
				'tahun' => $this->input->post('tahun')
			);

						$insert = $this->bulan_model->insert_data($data);
		//helper_log("add", "Menambah Daftar Pengguna");

			redirect ('bulan');
			//helper_log("add", "Menambah Daftar Pengguna");
	}

		public function proses_ubah($id)
	{
			 $data = array(
			'nama_bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun')
			);
			 $this->bulan_model->ubah($data, $id);
			 redirect('bulan');


	}
		public function proses_hapus($id=null)
	{

		$delete = $this->bulan_model->delete_data($id);
		redirect('bulan');
	}
}
