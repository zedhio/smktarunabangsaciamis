<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public $halaman="berita";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user'))
		{
			redirect("user/login");
		}

		$this->load->model("Muser");
		$this->load->model("Mberita");
		$this->load->model("Mkategori");
	}

	public function index()
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
		$data['halaman'] = $this->halaman;
		$data['berita'] = $this->Mberita->tampil();

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/berita/tampil', $data);
		$this->load->view('user/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
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
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/berita").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/berita/tambah', $data);
		$this->load->view('user/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);
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
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/berita").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/berita/edit', $data);
		$this->load->view('user/footer');
	}

	function hapus($id)
	{
		$this->Mberita->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Berita berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("user/berita").'">';
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/user/Berita.php */