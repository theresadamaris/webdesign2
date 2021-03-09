<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_client');
        $this->load->model('M_typeKamar');
        $this->load->model('M_layananExtra');
        $this->load->model('M_jenisPembayaran');
	}
    public function index() {
        $data['userdata'] = $this->userdata;
        $data['dataReservasi']=$this->M_client->dataAkhir();
        $data['dataTypeKamar'] = $this->M_typeKamar->select_all();
        $data['dataJenisPembayaran'] = $this->M_jenisPembayaran->select_all();
        $data['page'] = "About";
		$data['judul'] = "About";
		$data['deskripsi'] = "Tentang Kami";
		$this->template->views('about', $data);
	}
}