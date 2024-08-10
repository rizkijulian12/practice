<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	public function get_current_page_bulan($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('course');
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
	}
	public function get_data($id)
	{
		$this->db->where('id_course',$id);
    	$query = $this->db->get('materi');
    	return $query->result();
	}
		public function get_total()
    {
        if($this->input->get('cari'))
        {
        $this->db->like('judul', $this->input->get('cari'));
        $this->db->or_like('deskripsi',$this->input->get('cari'));
        }


        $this->db->from('course');
        $query = $this->db->get();
        return count($query->result());
    }
		public function get_record($limit, $start)
		{
				if($this->input->get('cari'))
				{
				$this->db->like('judul', $this->input->get('cari'));
	      $this->db->or_like('deskripsi',$this->input->get('cari'));
			}
			$query = $this->db->get('course');
				if ($query->num_rows() > 0)
				{
						foreach ($query->result() as $row)
						{
								$data[] = $row;
						}

						return $data;
				}
				return false;
		}
	public function get_data_guru($id)
	{
		$this->db->where('id',$id);
    	$query = $this->db->get('course');
    	return $query->row();
	}
	public function insert_data($data)
	{
    	$this->db->insert('course',$data);
	}

	public function ubah($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('course', $data);
	}
	public function get_id($id=null)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('course');
        return $query->row();
    }

	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('course');
	}

	public function delete_data_course($id)
	{
		$this->db->where('id_course',$id);
    	$this->db->delete('materi');
	}

	public function insert_data_materi($data)
	{
    	$this->db->insert('materi',$data);
	}
	public function get_data_materi($id)
	{
		$this->db->where('id',$id);
    	$query = $this->db->get('materi');
    	return $query->row();
	}
	public function ubah_materi($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('materi', $data);
	}
	public function delete_data_materi($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('materi');
	}


}
