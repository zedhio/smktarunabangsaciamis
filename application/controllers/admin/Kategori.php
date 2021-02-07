<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public $halaman="kategori";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Mkategori");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data["kategori"] = $this->Mkategori->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/kategori/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		// menu aktif
		$data['halaman'] = $this->halaman;

		$data['kosong']="";

		$this->form_validation->set_rules('nama','Kategori','required');

		$this->form_validation->set_message("required","%s harus diisi");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mkategori->tambah($this->input->post());
			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Kategori berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/kategori").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/kategori/tambah', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		// menu aktif
		$data['halaman'] = $this->halaman;
		$data['kategori'] = $this->Mkategori->detail($id);
		$data['kosong']="";

		if($data['kategori']['nama']==$this->input->post('nama'))
			$uniq="";
		else
			$uniq = "|is_unique[kategori.nama]";

		$this->form_validation->set_rules('nama','Kategori','required'.$uniq);

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mkategori->edit($this->input->post(),$id);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Kategori berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/kategori").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/kategori/edit', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mkategori->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Kategori berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/kategori").'">';
	}

}

/* End of file Halaman.php */
/* Location: ./application/controllers/admin/Halaman.php */