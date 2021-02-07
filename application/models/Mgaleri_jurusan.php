<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri_jurusan extends CI_Model
{
	function tampil()
	{
		$this->db->group_by('jurusan');
		$ambil = $this->db->get('galeri_jurusan');
		return $ambil->result_array();
	}

	function tambah($input)
	{
		$config['upload_path'] = './assets/img/galeri_jurusan/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		$this->upload->do_upload("gambar");

		$input['gambar'] = $this->upload->data("file_name");

		$input['url_galeri']  = url_title($input['jurusan'],"-",TRUE);

		$this->db->insert('galeri_jurusan', $input);
	}

	function detail($id)
	{
		$this->db->where('id_galeri_jurusan', $id);
		return $this->db->get('galeri_jurusan')->row_array();
	}

	function detail_galeri($url_galeri)
	{
		$this->db->where('url_galeri', $url_galeri);
		$ambil = $this->db->get('galeri_jurusan');
		$data = $ambil->result_array();

		return $data;
	}

	function edit($input,$id)
	{
		$detail = $this->detail($id);

		$config['upload_path'] = './assets/img/galeri_jurusan/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload("gambar"))
		{
			if(file_exists("./assets/img/galeri_jurusan/".$detail['gambar']))
			{
				unlink("./assets/img/galeri_jurusan/".$detail['gambar']);
			}

			$input['gambar'] = $this->upload->data("file_name");
			$input['url_galeri']  = url_title($input['jurusan'],"-",TRUE);
		}

		$this->db->where('id_galeri_jurusan', $id);
		$this->db->update('galeri_jurusan', $input);
	}

	function hapus($id)
	{
		$detail = $this->detail($id);
		unlink("./assets/img/galeri_jurusan/".$detail['gambar']);

		$this->db->where('id_galeri_jurusan', $id);
		$this->db->delete('galeri_jurusan');
	}

}

/* End of file Mgaleri_jurusan.php */
/* Location: ./application/models/Mgaleri_jurusan.php */