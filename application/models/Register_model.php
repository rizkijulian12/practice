<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
	
	public function insert_data($data)
	{
    	$this->db->insert('login',$data);	
	}
	
	

}