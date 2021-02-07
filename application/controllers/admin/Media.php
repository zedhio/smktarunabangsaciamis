<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller
{
	public $halaman="media";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Mmedia");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data["media"] = $this->Mmedia->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/media/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data['kosong']="";

		$this->form_validation->set_rules('nama','Nama','required|is_unique[media.nama]');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mmedia->tambah($this->input->post());

			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Media berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/media").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}


		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/media/tambah', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mmedia->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Media berhasil dihapus</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/media").'">';
	}

	function upload()
	{
		$this->Mmedia->tambah($this->input->post());
		echo "berhasil";
	}

}

/* End of file Media.php */
/* Location: ./application/controllers/admin/Media.php */