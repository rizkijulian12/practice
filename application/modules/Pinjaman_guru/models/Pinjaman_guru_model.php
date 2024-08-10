<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman_guru_model extends CI_Model {

	public function get_current_page_bulan($limit, $start) {
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
	public function get_data($bulan, $tahun)
	{
		$this->db->where('bulan',$bulan);
		$this->db->where('tahun',$tahun);
    	$query = $this->db->get('pinjaman_guru');
    	return $query->result();
	}
		public function get_total()
    {
        if($this->input->get('cari'))
        {
        $this->db->like('nama_guru', $this->input->get('cari'));
        $this->db->or_like('judul_buku',$this->input->get('cari'));
        }


        $this->db->from('pinjaman_guru');
        $query = $this->db->get();
        return count($query->result());
    }
		public function get_record($limit, $start)
		{
				if($this->input->get('cari'))
				{
				$this->db->like('nama_guru', $this->input->get('cari'));
	      $this->db->or_like('judul_buku',$this->input->get('cari'));
			}
			$query = $this->db->get('pinjaman_guru');
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
    	$query = $this->db->get('pinjaman_guru');
    	return $query->row();
	}
	public function insert_data($data)
	{
    	$this->db->insert('pinjaman_guru',$data);
	}

	public function ubah($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('pinjaman_guru', $data);
	}
	public function get_id($id=null)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('pinjaman_guru');
        return $query->row();
    }

	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('pinjaman_guru');
	}



}
