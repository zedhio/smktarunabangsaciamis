<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public $halaman="galeri";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Mgaleri_jurusan");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;
		$data['galeri'] = $this->Mgaleri_jurusan->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/galeri/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['kosong']="";

		$this->form_validation->set_rules('nama_galeri_jurusan','Nama','required|is_unique[galeri_jurusan.nama_galeri_jurusan]');
		$this->form_validation->set_rules('jurusan','Jurusan','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			// print_r($this->input->post());
			$this->Mgaleri_jurusan->tambah($this->input->post());
			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Galeri berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/galeri").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/galeri/tambah', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['detail'] = $this->Mgaleri_jurusan->detail($id);
		$data['kosong']="";

		if($data['detail']['nama_galeri_jurusan']==$this->input->post('nama_galeri_jurusan'))
			$uniq="";
		else
			$uniq="|is_unique[galeri_jurusan.nama_galeri_jurusan]";


		$this->form_validation->set_rules('nama_galeri_jurusan','Nama','required'.$uniq);

		$this->form_validation->set_rules('jurusan','Jurusan','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mgaleri_jurusan->edit($this->input->post(),$id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Galeri berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/galeri").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/galeri/edit', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mgaleri_jurusan->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Galeri berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/galeri").'">';
	}

}

/* End of file Galeri.php */
/* Location: ./application/controllers/admin/Galeri.php */