<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri extends CI_Model
{
	function tampil()
	{
		$this->db->join('album', 'galeri.id_album = album.id_album', 'left');
		$ambil = $this->db->get('galeri');
		return $ambil->result_array();
	}

	function detail($id)
	{
		$this->db->where('id_galeri', $id);
		return $this->db->get('galeri')->row_array();
	}

	function tampil_galeri($id)
	{
		$this->db->where('galeri.id_album', $id);
		$this->db->join('album', 'galeri.id_album = album.id_album', 'left');
		$ambil = $this->db->get('galeri');
		return $ambil->result_array();
	}

	function tampil_galeri_url($url)
	{
		$this->db->where('url_album', $url);
		$this->db->join('album', 'galeri.id_album = album.id_album', 'left');
		$ambil = $this->db->get('galeri');
		return $ambil->result_array();
	}

	function tambah($input)
	{
		$input['url']  = url_title($input['nama'],"-",TRUE);
		$this->db->insert('galeri', $input);
	}

	function hapus($id)
	{
		$this->db->where('id_galeri', $id);
		$this->db->delete('galeri');
	}
	function ambil($id)
	{
		$this->db->where('id', $id);
		$ambil = $this->db->get('galeri');
		return $ambil->row_array();
	}
	function ambil_url($url)
	{
		$this->db->where('url', $url);
		$ambil = $this->db->get('galeri');
		return $ambil->row_array();
	}
	function ubah($input,$id)
	{
		$config['upload_path'] = './assets/galeri/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		$ngupload = $this->upload->do_upload("gambar");
		if ($ngupload)
		{
			$detail = $this->ambil($id);
			unlink("assets/galeri/".$detail["gambar"]);
			unlink("assets/galeri/crop_".$detail["gambar"]);
			$input["gambar"]=$this->upload->data("file_name");

			$source_file = "assets/galeri/".$input["gambar"];
			$dst_dir = "assets/galeri/crop_".$input["gambar"];
			resize_crop_image(300, 200, $source_file, $dst_dir);
		}
		$input['url']=url_title($input['nama'],"-",TRUE);
		$this->db->where('id_galeri', $id);
		$this->db->update('galeri', $input);
	}
}

/* End of file Mgaleri.php */
/* Location: ./application/models/Mgaleri.php */