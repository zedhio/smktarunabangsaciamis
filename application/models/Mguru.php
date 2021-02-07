<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mguru extends CI_Model
{

	function tampil()
	{
		$this->db->order_by('id_guru', 'desc');
		return $this->db->get('guru')->result_array();
	}

	function tambah($input)
	{
		$config['upload_path'] = './assets/user/img/guru/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		$this->upload->do_upload("foto");

		$input['foto'] = $this->upload->data("file_name");

		$input['url_nip']  = url_title($input['nip'],"-",TRUE);

		$this->db->insert('guru', $input);
	}

	function detail($id)
	{
		$this->db->where('id_guru', $id);
		return $this->db->get('guru')->row_array();
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

		$config['upload_path'] = './assets/user/img/guru/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload("foto"))
		{
			if(file_exists("./assets/user/img/guru/".$detail['foto']))
			{
				unlink("./assets/user/img/guru/".$detail['foto']);
			}

			$input['foto'] = $this->upload->data("file_name");
		}

		$input['url_nip']  = url_title($input['nip'],"-",TRUE);

		$this->db->where('id_guru', $id);
		$this->db->update('guru', $input);	
	}

	function hapus($id)
	{
		$detail = $this->detail($id);

		if(file_exists("./assets/user/img/guru/".$detail['foto']))
		{
			unlink("./assets/user/img/guru/".$detail['foto']);
		}

		$this->db->where('id_guru', $id);
		$this->db->delete('guru');	
	}

}

/* End of file Mguru.php */
/* Location: ./application/models/Mguru.php */