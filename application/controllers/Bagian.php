<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_bagian');
		$this->load->model('M_kaprodi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataBagian'] = $this->M_bagian->select_all();
		$data['page'] = "Bagian";
		$data['judul'] = "Data Bagian";
		$data['deskripsi'] = "Manage Data Bagian";

		$data['modal_tambah_bagian'] = show_my_modal('modals/modal_tambah_bagian', 'tambah-Bagian', $data);

		$this->template->views('bagian/home', $data);
	}

	public function tampil() {
		$data['dataBagian'] = $this->M_bagian->select_all();
		$this->load->view('bagian/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama_bagian', 'Nama Bagian', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_bagian->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Bagian Berhasil ditambah'));
				redirect('Bagian');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Bagian Gagal ditambah'));
				redirect('Bagian');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Bagian');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataBagian'] = $this->M_bagian->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_bagian', 'update-Bagian', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama_bagian', 'Nama Bagian', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_bagian->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Bagian Berhasil diubah'));
				redirect('Bagian');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Bagian Gagal diubah'));
				redirect('Bagian');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Bagian');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_bagian->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Bagian Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Bagian Gagal dihapus', '20px');
		}
	}
}