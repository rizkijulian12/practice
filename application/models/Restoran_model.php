<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran_model extends CI_Model {

	function get_mahasiswa_list($limit, $start){
	        $query = $this->db->get('restoran', $limit, $start);
	        return $query;
	    }
	public function get_product_keyword($keyword){
		$this->db->select('*');
		$this->db->from('restoran');
		$this->db->like('nama_resto',$keyword);
		$this->db->or_like('alamat_resto',$keyword);
		return $this->db->get()->result();
	}

	public function get_data_restoran($id)
	{

		$this->db->where('id',$id);
    	$query = $this->db->get('restoran');
    	return $query->row();
	}

	public function insert($data)
	{
    	$this->db->insert('restoran',$data);
	}

	public function update_data($data_kode,$data_buku)
	{
    	$this->db->update('restoran',$data_buku);
	}

	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('restoran');
	}



}
