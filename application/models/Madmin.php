<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model
{

	function login($username,$password)
	{
		$password = sha1($password);


		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$ambil = $this->db->get('admin');
		$cek = $ambil->num_rows();

		if($cek==1)
		{
			$this->session->set_userdata('admin',$ambil->row_array());

			return 'berhasil';
		}
		else
		{
			return 'gagal';
		}
	}	

	function detail($id)
	{
		$id=1;
		$this->db->where('id_admin', $id);
		return $this->db->get('admin')->row_array();
	}

	function edit($input,$id)
	{
		if(!empty($input['password']))
		{
			$input['password'] = sha1($input['password']);
			$this->db->where('id_admin', $id);
			$this->db->update('admin', $input);
		}
		else
		{
			$inputan['username']=$input['username'];
			$inputan['nama_admin']=$input['nama_admin'];
			$this->db->where('id_admin', $id);
			$this->db->update('admin', $inputan);
		}
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */