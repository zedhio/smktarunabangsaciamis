<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public $halaman="home";

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user'))
		{
			redirect("user/login");
		}

		$this->load->model("Muser");
	}

	public function index()
	{
		// data user login
		$login = $this->session->userdata('user');
		$data['profil'] = $this->Muser->detail($login['id_user']);

		$data['halaman'] = $this->halaman;

		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	function logout()
	{
		$this->session->unset_userdata('user');
		redirect('user/login','refresh');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/user/Welcome.php */