<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengaturan extends CI_Model
{

	function tampil()
	{
		$this->db->order_by('id_pengaturan', 'desc');
		return $this->db->get('pengaturan')->result_array();
	}	

	function detail($id)
	{
		$this->db->where('id_pengaturan', $id);
		return $this->db->get('pengaturan')->row_array();
	}	

	function ambil($id)
	{
		$this->db->where('id_pengaturan', $id);
		$ambil = $this->db->get('pengaturan')->row_array();
		return $ambil['pengaturan'];
	}	

	function edit($input,$id)
	{
		$this->db->where('id_pengaturan', $id);
		$this->db->update('pengaturan',$input);
	}

}

/* End of file Mpengaturan.php */
/* Location: ./application/models/Mpengaturan.php */