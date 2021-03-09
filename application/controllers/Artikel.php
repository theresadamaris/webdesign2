<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_artikel');
		$this->load->model('M_kaprodi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataArtikel'] = $this->M_artikel->select_all();
		$data['page'] = "Artikel";
		$data['judul'] = "Data Artikel";
		$data['deskripsi'] = "Manage Data Artikel";

		$this->template->views('artikel/home', $data);
	}
    public function tambah() {
		$data['userdata'] = $this->userdata;
		$data['page'] = "Artikel";
		$data['judul'] = "Tambah Artikel";
		$data['deskripsi'] = "Manage Data Artikel";

		$this->template->views('artikel/add', $data);
	}

	public function tampil() {
		$data['dataArtikel'] = $this->M_artikel->select_all();
		$this->load->view('artikel/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
            $config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data_foto = $this->upload->data();
				$data['foto'] = $data_foto['file_name'];
			}
            $data['author'] =  $this->userdata->nama;
            
			$result = $this->M_artikel->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Artikel Berhasil ditambah'));
				redirect('Artikel');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Artikel Gagal ditambah'));
				redirect('Artikel');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Artikel');
		}
	}

	public function update() {
		$id = trim($_GET['id']);

		$data['dataArtikel'] = $this->M_artikel->select_by_id($id);
		$data['userdata'] = $this->userdata;
		$data['page'] = "Artikel";
		$data['judul'] = "Ubah Artikel";
		$data['deskripsi'] = "Manage Data Artikel";

		$this->template->views('artikel/update', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data_foto = $this->upload->data();
				$data['foto'] = $data_foto['file_name'];
			}
            $data['author'] =  $this->userdata->nama;
			$result = $this->M_artikel->update($data);
			if ($result > 0) {
				$this->session->set_flashdata('msg', show_succ_msg('Data Artikel Berhasil diubah'));
				redirect('Artikel');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Artikel Gagal diubah'));
				redirect('Artikel');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Artikel');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_artikel->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data artikel Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data artikel Gagal dihapus', '20px');
		}
	}
}