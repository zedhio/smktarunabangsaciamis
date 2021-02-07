<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mberita extends CI_Model
{
	function tampil_kategori_berita()
	{
		$semua=array();
		
		$data = $this->db->get('kategori')->result_array();
		foreach ($data as $key => $value)
		{
			$this->db->where('id_kategori', $value['id_kategori']);
			$hasil = $this->db->get('berita')->result_array();
			$value['berita']=$hasil;
			$semua[] = $value;
		}

		return $semua;
	}

	function berita_kategori_limit($url){

		$this->db->where('kategori.url', $url);
		$this->db->order_by('id_berita', 'desc');
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get('berita',4)->result_array();
	}

	function tampil()
	{
		$this->db->order_by('id_berita', 'desc');
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get('berita')->result_array();
	}	

	function berita_kategori($url)
	{	
		$this->db->where('kategori.url', $url);
		$this->db->order_by('id_berita', 'desc');
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get('berita')->result_array();
	}

	function berita_terbaru()
	{
		$this->db->limit(3);
		$this->db->order_by('id_berita', 'desc');
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get('berita')->result_array();
	}

	function tambah($input)
	{
		$config['upload_path'] = './assets/admin/img/berita/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		$this->upload->do_upload("foto_berita");

		$input['tgl_berita'] = date("Y-m-d");

		$input['foto_berita'] = $this->upload->data("file_name");

		$input['url_berita']  = url_title($input['judul_berita'],"-",TRUE);

		$this->db->insert('berita', $input);
	}

	function detail($id)
	{
		$this->db->where('id_berita', $id);
		return $this->db->get('berita')->row_array();
	}

	function berita_url($url)
	{
		$this->db->where('url_berita', $url);
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get('berita')->row_array();
	}

	function edit($input,$id)
	{
		$detail = $this->detail($id);

		$config['upload_path'] = './assets/admin/img/berita/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload("foto_berita"))
		{
			if(file_exists("./assets/admin/img/berita/".$detail['foto_berita']))
			{
				unlink("./assets/admin/img/berita/".$detail['foto_berita']);
			}

			$input['foto_berita'] = $this->upload->data("file_name");
		}

		$input['tgl_berita'] = date("Y-m-d");

		$input['url_berita']  = url_title($input['judul_berita'],"-",TRUE);

		$this->db->where('id_berita', $id);
		$this->db->update('berita', $input);	
	}

	function hapus($id)
	{
		$detail = $this->detail($id);

		if(file_exists("./assets/admin/img/berita/".$detail['foto_berita']))
		{
			unlink("./assets/admin/img/berita/".$detail['foto_berita']);
		}

		$this->db->where('id_berita', $id);
		$this->db->delete('berita');	
	}

}

/* End of file Mberita.php */
/* Location: ./application/models/Mberita.php */