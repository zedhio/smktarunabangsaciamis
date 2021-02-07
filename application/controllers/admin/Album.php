<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller
{
	public $halaman="album";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Malbum");
		$this->load->model("Mmedia");
		$this->load->model("Mgaleri");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['album'] = $this->Malbum->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/album/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['media'] = $this->Mmedia->tampil();

		$data['kosong']="";

		$this->form_validation->set_rules('nama_album','Nama','required|is_unique[album.nama_album]');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Malbum->tambah($this->input->post());
			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Album berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/album").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}


		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/album/tambah', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Malbum->hapus($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Album berhasil dihapus</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/album").'">';
	}

	function galeri($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['galeri'] = $this->Mgaleri->tampil_galeri($id);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/galeri/tampil', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Album.php */
/* Location: ./application/controllers/admin/Album.php */