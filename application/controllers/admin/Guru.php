<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller
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
		$this->load->model("Mguru");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['guru'] = $this->Mguru->tampil();		

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/guru/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
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
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/guru").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/guru/tambah', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
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

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/guru/edit', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mguru->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Guru berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/guru").'">';
	}

	function detail($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['detail'] = $this->Mguru->detail($id);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/guru/detail', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/admin/Guru.php */