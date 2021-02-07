<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller
{

	public $halaman="album";
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mberita");
		$this->load->model("Mkategori");
		$this->load->model("Mmenu");
		$this->load->model("Mhalaman");
		$this->load->model("Mgaleri");
		$this->load->model("Malbum");
		$this->load->model("Mpengaturan");
	}

	public function index()
	{
		$data['menu'] = $this->Mmenu->tampil();
		$data['album'] = $this->Malbum->tampil();
		$data['hal'] = $this->halaman;

		$this->load->view('pengunjung/list_album',$data);
		$this->load->view('pengunjung/footer');	
	}

	public function detail($url)
	{
		$data['menu'] = $this->Mmenu->tampil();
		$data['galeri'] = $this->Mgaleri->tampil_galeri_url($url);
		$data['album'] = $this->Malbum->ambil_url($url);
		$data['hal'] = $this->halaman;

		$this->load->view('pengunjung/album_kegiatan',$data);
		$this->load->view('pengunjung/footer');
	}

}

/* End of file Album.php */
/* Location: ./application/controllers/Album.php */