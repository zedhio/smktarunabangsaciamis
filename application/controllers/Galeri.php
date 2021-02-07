<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	public $halaman="galeri";
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mberita");
		$this->load->model("Mkategori");
		$this->load->model("Mmenu");
		$this->load->model("Mhalaman");
		$this->load->model("Mgaleri");
		$this->load->model("Mgaleri_jurusan");
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
		$data['berita_kategori'] = $this->Mberita->tampil();
		$data['galeri'] = $this->Mgaleri_jurusan->tampil();
		$data['hal'] = $this->halaman;

		$this->load->view('pengunjung/galeri',$data);
	}

	public function detail($url_galeri)
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
		$data['berita_kategori'] = $this->Mberita->tampil();
		$data['galeri'] = $this->Mgaleri_jurusan->detail_galeri($url_galeri);
		$data['hal'] = $this->halaman;
		$data['url'] = str_replace("-", " ", $url_galeri);

		$this->load->view('pengunjung/detail_galeri',$data);
	}	

}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */