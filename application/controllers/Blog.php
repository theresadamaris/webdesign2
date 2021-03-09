<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_artikel');
	}

	public function index() {
		$data['dataArtikelHeader'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader2'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader3'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader4'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader5'] = $this->M_artikel->select_header();
		$data['dataArtikelTerbaru'] = $this->M_artikel->select_terbaru();
		$data['dataArtikelRandom'] = $this->M_artikel->select_random();
		$this->load->view('blog/home',$data);
	}

	public function Artikel($id) {
		$data['dataArtikel'] = $this->M_artikel->select_by_id($id);
		$data['dataArtikelTerbaru'] = $this->M_artikel->select_terbaru();
		$data['dataArtikelKategori']=$this->M_artikel->select_by_kategori($data['dataArtikel']->kategori);
		$this->load->view('blog/single',$data);
		
	}
	public function kategori($id) {
		$kategori=str_replace('%20', ' ', $id);
		$data['dataArtikelHeader'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader2'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader3'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader4'] = $this->M_artikel->select_header();
		$data['dataArtikelHeader5'] = $this->M_artikel->select_header();
		$data['dataArtikelKategori']=$this->M_artikel->select_by_kategori2($kategori);
		$data['dataArtikelRandom'] = $this->M_artikel->select_random();
		$data['nama_kategori']=$kategori;
		$this->load->view('blog/kategori',$data);
		
	}

}