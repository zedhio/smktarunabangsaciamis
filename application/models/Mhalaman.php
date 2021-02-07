<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhalaman extends CI_Model
{
	function tampil()
	{
		$ambil = $this->db->get('halaman');
		return $ambil->result_array();
	}
	function tambah($input)
	{
		$config['upload_path'] = './assets/admin/img/halaman/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		$this->upload->do_upload("gambar");

		$input['gambar'] = $this->upload->data("file_name");

		$input['tanggal']  = date("Y-m-d");
		$input['url']  = url_title($input['judul'],"-",TRUE);
		$this->db->insert('halaman', $input);
	}
	function hapus($id)
	{
		$detail = $this->detail($id);

		if(file_exists("./assets/admin/img/halaman/".$detail['gambar']))
		{
			unlink("./assets/admin/img/halaman/".$detail['gambar']);
		}

		$this->db->where('id_halaman', $id);
		$this->db->delete('halaman');
	}
	function detail($id)
	{
		$this->db->where('id_halaman', $id);
		$ambil = $this->db->get('halaman');
		return $ambil->row_array();
	}
	function ambil_halaman_url($url)
	{
		$this->db->where('url', $url);
		$ambil = $this->db->get('halaman');
		return $ambil->row_array();
	}
	function edit($input,$id)
	{
		$config['upload_path'] = './assets/admin/img/halaman/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);

		$detail = $this->detail($id);
		
		if($this->upload->do_upload("gambar"))
		{
			if(file_exists("./assets/admin/img/halaman/".$detail['gambar']))
			{
				unlink("./assets/admin/img/halaman/".$detail['gambar']);
			}

			$input['gambar'] = $this->upload->data("file_name");
		}

		
		$input['url']=url_title($input['judul'],"-",TRUE);
		$this->db->where('id_halaman', $id);
		$this->db->update('halaman', $input);
	}
}

/* End of file Mhalaman.php */
/* Location: ./application/models/Mhalaman.php */