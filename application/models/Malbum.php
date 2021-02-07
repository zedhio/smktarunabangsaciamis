<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Malbum extends CI_Model
{
	function tampil()
	{
		$ambil = $this->db->get('album');
		return $ambil->result_array();
	}
	function tambah($input)
	{	
		$input['url_album']  = url_title($input['nama_album'],"-",TRUE);
		$this->db->insert('album', $input);
	}
	function hapus($id)
	{
		$this->db->where('id_album', $id);
		$this->db->delete('album');
	}
	function ambil($id)
	{
		$this->db->where('id_album', $id);
		$ambil = $this->db->get('album');
		return $ambil->row_array();
	}
	function ambil_url($url)
	{
		$this->db->where('url_album', $url);
		$ambil = $this->db->get('album');
		return $ambil->row_array();
	}
	function ubah($input,$id)
	{
		$input['url']=url_title($input['nama_album'],"-",TRUE);
		$this->db->where('id_album', $id);
		$this->db->update('album', $input);
	}
}

/* End of file Mgaleri.php */
/* Location: ./application/models/Mgaleri.php */