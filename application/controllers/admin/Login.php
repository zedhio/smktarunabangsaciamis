<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Madmin");
	}

	public function index()
	{
		$data['kosong']="";

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_message("required","%s harus diisi");

		if ($this->form_validation->run() == TRUE)
		{
			$cek = $this->Madmin->login($this->input->post('username'),$this->input->post('password'));

			if($cek=="berhasil")
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-info">Login berhasil</div>');
				echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin").'">';
			}
			else
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login Gagal</div>');
				echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/login").'">';
			}

			
		}
		else
		{
			$data['kosong'] = validation_errors();
		}

		$this->load->view('admin/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */