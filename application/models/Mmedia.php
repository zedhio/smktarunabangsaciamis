<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmedia extends CI_Model
{
	function tampil()
	{
		$ambil = $this->db->get('media');
		return $ambil->result_array();
	}

	function tambah($input)
	{
		$config['upload_path'] = './assets/admin/media/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|mp4|pdf|zip|rar|doc|docx|xls|xlsx|ppt|pptx';
		
		$this->load->library('upload', $config);
		
		$ngupload = $this->upload->do_upload("url");
		if ($ngupload)
		{
			$input["url"]=$this->upload->data("file_name");
		}
		$this->db->insert('media', $input);
	}
	
	function hapus($id)
	{
		$detail = $this->ambil_media($id);
		unlink("./assets/admin/media/".$detail["url"]);
		$this->db->where('id_media', $id);
		$this->db->delete('media');
	}

	function ambil_media($id)
	{
		$this->db->where('id_media', $id);
		$ambil = $this->db->get('media');
		return $ambil->row_array();
	}
	
}

/* End of file Mmedia.php */
/* Location: ./application/models/Mmedia.php */