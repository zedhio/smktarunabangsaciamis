<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public $halaman="home";
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mberita");
		$this->load->model("Mmenu");
		$this->load->model("Mhalaman");
		$this->load->model("Malbum");
		$this->load->model("Mguru");
		$this->load->model("Mpengaturan");
	}

	public function index()
	{
		$data['logo'] = $this->Mpengaturan->ambil("5");
		$data['nama'] = $this->Mpengaturan->ambil("1");
		$data['lat'] = $this->Mpengaturan->ambil("6");
		$data['lng'] = $this->Mpengaturan->ambil("7");
		$data['alamat'] = $this->Mpengaturan->ambil("2");
		$data['telp'] = $this->Mpengaturan->ambil("8");
		$data['email'] = $this->Mpengaturan->ambil("9");
		$data['waktu'] = $this->Mpengaturan->ambil("10");
		$data['menu'] = $this->Mmenu->tampil();
		$data['gambar_hero'] = $this->Mpengaturan->ambil("3");
		$data['text_hero'] = $this->Mpengaturan->ambil("4");
		$data['tentang'] = $this->Mpengaturan->ambil("11");
		$data['hal'] = $this->halaman;
		$data['album'] = $this->Malbum->tampil();
		$data['guru'] = $this->Mguru->tampil();
		$data['berita'] = $this->Mberita->berita_kategori_limit('berita-terbaru');

		$this->load->view('pengunjung/index',$data);
	}
}
