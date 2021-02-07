<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategori extends CI_Model
{

	function tampil()
	{
		$this->db->order_by('id_kategori', 'desc');
		$ambil = $this->db->get('kategori');
		return $ambil->result_array();
	}

	function tambah($input)
	{
		
		$input['url']  = url_title($input['nama'],"-",TRUE);
		$this->db->insert('kategori', $input);
	}
	function hapus($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}
	function detail($id)
	{
		$this->db->where('id_kategori', $id);
		$ambil = $this->db->get('kategori');
		return $ambil->row_array();
	}
	function ambil_kategori_url($url)
	{
		$this->db->where('url', $url);
		$ambil = $this->db->get('kategori');
		return $ambil->row_array();
	}
	function edit($input,$id)
	{
		
		$input['url']=url_title($input['nama'],"-",TRUE);
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $input);
	}

}

/* End of file Mkategori.php */
/* Location: ./application/models/Mkategori.php */	