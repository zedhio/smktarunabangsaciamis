<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public $halaman="menu";

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}
		$this->load->model('Mmenu');
		$this->load->model('Mhalaman');
		$this->load->model('Madmin');
		$this->load->model('Mkategori');
	}
	public function index()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data["menu"] = $this->Mmenu->tampil();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/menu/tampil', $data);
		$this->load->view('admin/footer');
	}
	function tambah()
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		if ($this->input->post())
		{
			$this->Mmenu->tambah($this->input->post());
			redirect('admin/menu','refresh');
		}
		
		$data['halaman'] = $this->Mhalaman->tampil();
		$data['kategori'] = $this->Mkategori->tampil();
		$data['menu'] = $this->Mmenu->tampil();
		
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/menu/tambah', $data);
		$this->load->view('admin/footer');
	}
	
	function detail($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$data["menu"] = $this->Mmenu->detail($id);
		
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/menu/detail', $data);
		$this->load->view('admin/footer');
	}
	function hapus($id)
	{
		 $this->Mmenu->hapus($id);
		 redirect('admin/menu','refresh');
	}
	function edit($id)
	{
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		if ($this->input->post())
		{
			$this->Mmenu->edit($this->input->post(),$id);
			redirect('admin/menu','refresh');
		}
		$data["semuamenu"] = $this->Mmenu->tampil();
		$data["menu"] = $this->Mmenu->detail($id);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/menu/edit', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file menu.php */
/* Location: ./application/controllers/admin/menu.php */