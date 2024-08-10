<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulan_model extends CI_Model {

	public function get_current_page($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('bulan');
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }
		public function get_total()
    {
        if($this->input->get('cari'))
        {
        $this->db->like('nama_peminjam', $this->input->get('cari'));
        $this->db->or_like('judul_buku',$this->input->get('cari'));
				$this->db->or_like('no_klasifikasi',$this->input->get('cari'));
				$this->db->or_like('tgl_meminjam',$this->input->get('cari'));
        }


        $this->db->from('bulan');
        $query = $this->db->get();
        return count($query->result());
    }
		public function get_record($limit, $start)
		{
				if($this->input->get('cari'))
				{
					$this->db->like('nama_peminjam', $this->input->get('cari'));
	        $this->db->or_like('judul_buku',$this->input->get('cari'));
					 $this->db->or_like('no_klasifikasi',$this->input->get('cari'));
					 $this->db->or_like('tgl_meminjam',$this->input->get('cari'));
			}
			$query = $this->db->get('bulan');
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
	public function get_data_bulan($id)
	{

		$this->db->where('id',$id);
    	$query = $this->db->get('bulan');
    	return $query->row();
	}
	public function insert_data($data)
	{
    	$this->db->insert('bulan',$data);
	}

	public function ubah($data,$id)
	{
		$this->db->where('id' , $id);
		$this->db->update('bulan' , $data);
	}
	public function get_id($id=null)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('bulan');
        return $query->row();
    }

	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('bulan');
	}



}
