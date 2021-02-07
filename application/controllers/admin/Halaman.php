<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller
{
	public $halaman="halaman";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Mhalaman");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data["hal"] = $this->Mhalaman->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/halaman/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['kosong']="";

		$this->form_validation->set_rules('judul','Judul','required|is_unique[halaman.judul]');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mhalaman->tambah($this->input->post());

			$this->session->set_flashdata('pesan', '<div class="alert alert-info">Halaman berhasil disimpan</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/halaman").'">';	
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/halaman/tambah', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);
		$data['halaman'] = $this->halaman;
		$data['detail']=$this->Mhalaman->detail($id);
		$data['kosong']="";

		if($data['detail']['judul']==$this->input->post('judul'))
			$uniq="";
		else
			$uniq="|is_unique[halaman.judul]";


		$this->form_validation->set_rules('judul','Judul','required'.$uniq);

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mhalaman->edit($this->input->post(),$id);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Halaman berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/halaman").'">';
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/halaman/edit', $data);
		$this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$this->Mhalaman->hapus($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Halaman berhasil dihapus</div>');
		echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/halaman").'">';
	}

}

/* End of file Halaman.php */
/* Location: ./application/controllers/admin/Halaman.php */