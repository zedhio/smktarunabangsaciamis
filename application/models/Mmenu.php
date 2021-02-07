<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenu extends CI_Model
{
	function tampil()
	{
		$sd=array();
		$this->db->where('parent', 0);
		$this->db->order_by('urutan', 'asc');
		$ambil = $this->db->get('menu');
		$mu = $ambil->result_array();
		foreach ($mu as $key => $pm)
		{
			$idm =$pm['id_menu'];
			$this->db->where('parent', $idm);
			$this->db->order_by('urutan', 'asc');
			$an=$this->db->get('menu');
			$pm["anak"]=$an->result_array();
			$sd[]=$pm;
		}
		return $sd;
	}
	
	function tambah($input)
	{
		if (empty($input['id_halaman']))
		{
			unset($input['id_halaman']);
		}
		else
		{
			$this->db->where('id_halaman', $input['id_halaman']);
			$get = $this->db->get('halaman');
			$a = $get->row_array();
			$input["nama"]=$a['judul'];
			$input["url"]=base_url("halaman/".$a['url']);
			unset($input['id_halaman']);
		}

		if (empty($input['id_kategori']))
		{
			unset($input['id_kategori']);
		}
		else
		{
			$this->db->where('id_kategori', $input['id_kategori']);
			$get = $this->db->get('kategori');
			$a = $get->row_array();
			$input["nama"]=$a['nama'];
			$input["url"]=base_url("kategori/".$a['url']);
			unset($input['id_kategori']);
		}

		$this->db->insert('menu', $input);
	}
	function hapus($id)
	{
		$this->db->where('id_menu', $id);
		$this->db->delete('menu');
	}
	function detail($id)
	{
		$this->db->where('id_menu', $id);
		$ambil = $this->db->get('menu');
		return $ambil->row_array();
	}
	function edit($input,$id)
	{	
		$this->db->where('id_menu', $id);
		$this->db->update('menu', $input);
	}
}

/* End of file Mmenu.php */
/* Location: ./application/models/Mmenu.php */