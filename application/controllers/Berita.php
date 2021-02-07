<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{

	public $halaman="berita";
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mberita");
		$this->load->model("Mkategori");
		$this->load->model("Mmenu");
		$this->load->model("Mhalaman");
		$this->load->model("Mgaleri");
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
		$data['kategori']['nama']="Berita";
		$data['hal'] = $this->halaman;

		$this->load->view('pengunjung/berita',$data);
	}

	public function detail($url)
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
		$data['berita'] = $this->Mberita->berita_url($url);
		$data['berita_terbaru'] = $this->Mberita->berita_terbaru();
		$data['berita_kategori'] = $this->Mberita->berita_kategori($data['berita']['url']);
		$data['hal'] = $this->halaman;

		$this->load->view('pengunjung/detail_berita',$data);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */