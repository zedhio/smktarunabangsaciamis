<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public $halaman="home";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/login");
		}

		$this->load->model("Madmin");
	}

	public function index()
	{
		// data admin login
		$login = $this->session->userdata('admin');
		$data['profil'] = $this->Madmin->detail($login['id_admin']);

		$data['halaman'] = $this->halaman;

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer');
	}

	function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('admin/login','refresh');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/admin/Welcome.php */