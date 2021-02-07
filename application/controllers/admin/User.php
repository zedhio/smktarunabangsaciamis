<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public $halaman="guru";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Muser");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['user'] = $this->Muser->tampil();		

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/user/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['kosong']="";

		$this->form_validation->set_rules('nama_user','Nama User','required|is_unique[user.nama_user]');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Muser->tambah($this->input->post());

			$this->session->set_flashdata('pesan', '<div class="alert alert-info">User berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/user").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/user/tambah', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

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
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/user").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/user/edit', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Muser->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">User berhasil dihapus</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/user").'">';
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */