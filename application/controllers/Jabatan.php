<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_jabatan');
		$this->load->model('M_kaprodi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$data['page'] = "Jabatan";
		$data['judul'] = "Data Jabatan";
		$data['deskripsi'] = "Manage Data Jabatan";

		$data['modal_tambah_jabatan'] = show_my_modal('modals/modal_tambah_jabatan', 'tambah-Jabatan', $data);

		$this->template->views('jabatan/home', $data);
	}

	public function tampil() {
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$this->load->view('jabatan/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_jabatan->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Jabatan Berhasil ditambah'));
				redirect('Jabatan');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Jabatan Gagal ditambah'));
				redirect('Jabatan');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Jabatan');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataJabatan'] = $this->M_jabatan->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_jabatan', 'update-Jabatan', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_jabatan->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Jabatan Berhasil diubah'));
				redirect('Jabatan');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Jabatan Gagal diubah'));
				redirect('Jabatan');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Jabatan');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_jabatan->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Jabatan Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Jabatan Gagal dihapus', '20px');
		}
	}
}