<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
	public $halaman="pengaturan";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
		$this->load->model("Mpengaturan");
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		// menu aktif
		$data['halaman'] = $this->halaman;

		$data['pengaturan'] = $this->Mpengaturan->tampil();


		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pengaturan/tampil', $data);
		$this->load->view('admin/footer');
	}

	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		// menu aktif
		$data['halaman'] = $this->halaman;

		$data['pengaturan'] = $this->Mpengaturan->detail($id);

		$data['kosong']="";
		

		if($data['pengaturan']['nama_pengaturan']==$this->input->post('nama_pengaturan'))
			$uniq="";
		else
			$uniq = "|is_unique[pengaturan.nama_pengaturan]";

		$this->form_validation->set_rules('nama_pengaturan','Nama Pengaturan','required'.$uniq);
		$this->form_validation->set_rules('pengaturan','Pengaturan','required');

		$this->form_validation->set_message("required","%s harus diisi");
		$this->form_validation->set_message("is_unique","%s Sudah terdaftar");

		if ($this->form_validation->run() == TRUE)
		{
			$this->Mpengaturan->edit($this->input->post(),$id);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Pengaturan berhasil diubah</div>');
			echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/pengaturan").'">';
			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}


		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pengaturan/edit', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/admin/Pengaturan.php */