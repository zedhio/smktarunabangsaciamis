<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller
{
	public $halaman="guru";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user'))
		{
			redirect("user/login");
		}

		$this->load->model("Muser");
		$this->load->model("Mguru");
		// $this->load->model("Mkategori");
	}

	public function index()
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
		$data['halaman'] = $this->halaman;
		$data['guru'] = $this->Mguru->tampil();

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/guru/tampil', $data);
		$this->load->view('user/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
		$data['halaman'] = $this->halaman;
		$data['kosong']="";

		$this->form_validation->set_rules('nama_guru','Nama Guru','required|is_unique[guru.nama_guru]');
		$this->form_validation->set_rules('nip','NIP','required|is_unique[guru.nip]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('mata_pelajaran','Mata Pelajaran','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mguru->tambah($this->input->post());

			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Guru berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/guru").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/guru/tambah', $data);
		$this->load->view('user/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
		$data['halaman'] = $this->halaman;
		$data['detail'] = $this->Mguru->detail($id);
		$data['kosong']="";

		if($data['detail']['nama_guru']==$this->input->post('nama_guru'))
			$uniq="";
		else
			$uniq="|is_unique[guru.nama_guru]";

		if($data['detail']['nip']==$this->input->post('nip'))
			$uniq="";
		else
			$uniq="|is_unique[guru.nip]";

		$this->form_validation->set_rules('nama_guru','Nama Guru','required'.$uniq);
		$this->form_validation->set_rules('nip','NIP','required'.$uniq);

		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('mata_pelajaran','Mata Pelajaran','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mguru->edit($this->input->post(),$id);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Guru berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/guru").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/guru/edit', $data);
		$this->load->view('user/footer');
	}

	function hapus($id)
	{
		$this->Mguru->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Guru berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/guru").'">';
	}

	function detail($id)
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
		$data['halaman'] = $this->halaman;
		$data['detail'] = $this->Mguru->detail($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/guru/detail', $data);
		$this->load->view('user/footer');
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/user/Guru.php */