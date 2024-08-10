<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function get_mahasiswa_list($limit, $start){
						$query = $this->db->get('restoran', $limit, $start);
						return $query;
				}
}
