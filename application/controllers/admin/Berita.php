<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public $halaman="berita";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Mberita");
		$this->load->model("Mkategori");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['berita'] = $this->Mberita->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/berita/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['kategori'] = $this->Mkategori->tampil();
		$data['kosong']="";

		$this->form_validation->set_rules('judul_berita','Judul','required|is_unique[berita.judul_berita]');
		$this->form_validation->set_rules('isi_berita','Isi','required');
		$this->form_validation->set_rules('id_kategori','Isi','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mberita->tambah($this->input->post());

			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Berita berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/berita").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/berita/tambah', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['kategori'] = $this->Mkategori->tampil();
		$data['detail']=$this->Mberita->detail($id);
		$data['kosong']="";

		if($data['detail']['judul_berita']==$this->input->post('judul_berita'))
			$uniq="";
		else
			$uniq="|is_unique[berita.judul_berita]";

		$this->form_validation->set_rules('judul_berita','Judul','required'.$uniq);
		$this->form_validation->set_rules('isi_berita','Isi','required');
		$this->form_validation->set_rules('id_kategori','Isi','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mberita->edit($this->input->post(),$id);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berita berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/berita").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/berita/edit', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mberita->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Berita berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/berita").'">';
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */