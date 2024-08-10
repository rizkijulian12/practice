<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function get_data()
	{
    	$query = $this->db->get('contact');
    	return $query->result();
	}
	public function insert_data($data)
	{
		$this->db->insert('contact',$data);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('contact');
	}



}
