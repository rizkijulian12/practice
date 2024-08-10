<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_model extends CI_ModeL {

	
	public function get_data()
	{
		$query = $this->db->query('select * from sekolah');
	 	return $query->result();
	}

	public function get_data2()
	{
		$query = $this->db->get('sekolah');
		return $quary->result();
	}

public function get_data_sekolah($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('sekolah');
		return $query->row();
	}
	
	public function insert_data($data)
	{
		$this->db->insert('sekolah',$data);
	}

	public function update_data($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('sekolah',$data);
	}

	public function delete_data($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('sekolah');
	}
}
