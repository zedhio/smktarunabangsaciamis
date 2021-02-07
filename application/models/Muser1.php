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
		$id=1;
		$this->db->where('id_user', $id);
		return $this->db->get('user')->row_array();
	}

	// function edit($input,$id)
	// {
	// 	if(!empty($input['password']))
	// 	{
	// 		$input['password'] = sha1($input['password']);
	// 		$this->db->where('id_user', $id);
	// 		$this->db->update('user', $input);
	// 	}
	// 	else
	// 	{
	// 		$inputan['username']=$input['username'];
	// 		$inputan['nama_user']=$input['nama_user'];
	// 		$this->db->where('id_user', $id);
	// 		$this->db->update('user', $inputan);
	// 	}
	// }

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */