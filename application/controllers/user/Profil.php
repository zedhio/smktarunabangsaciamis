<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public $halaman="profil";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user'))
		{
			redirect("user/login");
		}

		$this->load->model("Muser");
	}

	function edit()
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
		$data['halaman'] = $this->halaman;
		$id = $login['id_user'];
		$data['detail'] = $this->Muser->ambil_user($id);
		$data['kosong']="";

		if($data['detail']['nama_user']==$this->input->post('nama_user'))
			$uniq="";
		else
			$uniq="|is_unique[user.nama_user]";

		$this->form_validation->set_rules('nama_user','Nama User','required'.$uniq);

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Muser->edit($this->input->post(),$id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">User berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/profil/edit").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/profil/edit', $data);
		$this->load->view('user/footer');
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/user/Profil.php */