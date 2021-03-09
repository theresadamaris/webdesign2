<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		
		$data['userdata'] 		= $this->userdata;
		$data['page'] 			= "home";
		$data['judul'] 			= "Dasboard";
		$data['deskripsi'] 		= " ";
		
		if($data['userdata']->akses=="operator"){
			$this->template->views('home', $data); 
		}else if($data['userdata']->akses=="mahasiswa" and $data['userdata']->kelas==4){
			$this->template->views('submit_skripsi', $data);
		}else if($data['userdata']->akses=="mahasiswa" and $data['userdata']->kelas!=4){
			redirect('Skripsi');
		}
		else if($data['userdata']->akses=="kaprodi"){
			$this->template->views('ka_prodi', $data);
		}
		else{
			$this->template->views('about', $data);
		}
		
		
	}
}