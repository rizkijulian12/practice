<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_ix_model extends CI_Model {

	public function get_current_page($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('kelas_9');
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
	}
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
	public function get_data_count($bulan,$tahun)
	{
		$this->db->where('bulan',$bulan);
		$this->db->where('tahun',$tahun);
		$query = $this->db->from('kelas_9');
    	return $query->count_all_results();
	}
	public function get_data($bulan, $tahun)
	{
		$this->db->where('bulan',$bulan);
		$this->db->where('tahun',$tahun);
    	$query = $this->db->get('kelas_9');
    	return $query->result();
	}
		public function get_total()
    {
		$this->db->where('bulan','Januari');
		$this->db->where('tahun','2020');
        $this->db->from('kelas_9');
        $query = $this->db->get();
        return count($query->result());
    }
		public function get_record($limit, $start)
		{
				if($this->input->get('cari'))
				{
					$this->db->like('nama_peminjam', $this->input->get('cari'));
	        $this->db->or_like('no_klasifikasi',$this->input->get('cari'));
					$this->db->or_like('judul_buku',$this->input->get('cari'));
					$this->db->or_like('tgl_meminjam',$this->input->get('cari'));
			}
			$query = $this->db->get('kelas_9');
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
	public function get_data_kelas_ix($id)
	{

		$this->db->where('id',$id);
    	$query = $this->db->get('kelas_9');
    	return $query->row();
	}
	public function insert_data($data)
	{
    	$this->db->insert('kelas_9',$data);
	}

	public function ubah($data,$id)
	{
		$this->db->where('id' , $id);
		$this->db->update('kelas_9' , $data);
	}
	public function get_id($id=null)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kelas_9');
        return $query->row();
    }

	public function delete_data($id)
	{
		$this->db->where('id',$id);
    	$this->db->delete('kelas_9');
	}



}
