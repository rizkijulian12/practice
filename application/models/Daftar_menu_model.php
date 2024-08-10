<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_menu_model extends CI_Model {

	public function get_data($id)
	{
		$this->db->where('id_resto',$id);
	    	$query = $this->db->get('daftar_menu');
    	return $query->result();
	}


	public function get_data_daftar_menu($id)
	{

		$this->db->where('id',$id);
    	$query = $this->db->get('daftar_menu');
    	return $query->row();
	}

	public function insert_data($data)
	{
    	$this->db->insert('daftar_menu',$data);
	}

	public function update_data($data,$id)
	{
		$this->db->where('id',$id);
    	$this->db->update('daftar_menu',$data);
	}

	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('daftar_menu');
	}



}
