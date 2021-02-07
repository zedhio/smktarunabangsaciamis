<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model
{

	function login($username,$password)
	{
		$password = sha1($password);


		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$ambil = $this->db->get('user');
		$cek = $ambil->num_rows();

		if($cek==1)
		{
			$this->session->set_userdata('user',$ambil->row_array());

			return 'berhasil';
		}
		else
		{
			return 'gagal';
		}
	}	

	function detail($id)
	{
		$this->db->where('id_user', $id);
		return $this->db->get('user')->row_array();
	}

	function tampil()
	{
		$this->db->order_by('id_user', 'desc');
		return $this->db->get('user')->result_array();
	}

	function tambah($input)
	{
		$data['username'] = $input['username'];
		$data['password'] = sha1($input['password']);
		$data['nama_user'] = $input['nama_user'];

		$this->db->insert('user', $data);
	}

	function ambil_user($id)
	{
		$this->db->where('id_user', $id);
		return $this->db->get('user')->row_array();
	}

	function edit($input,$id)
	{
		if (empty($input['password']))
		{
			$data['username'] = $input['username'];
			$data['nama_user'] = $input['nama_user'];

			$this->db->where('id_user', $id);
			$this->db->update('user', $data);
		}
		elseif (!empty($input['password'])) 
		{
			$data['username'] = $input['username'];
			$data['password'] = sha1($input['password']);
			$data['nama_user'] = $input['nama_user'];

			$this->db->where('id_user', $id);
			$this->db->update('user', $data);
		}	
	}

	function hapus($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user');	
	}

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */