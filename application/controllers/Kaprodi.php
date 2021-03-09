<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaprodi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kaprodi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();

		$data['page'] = "Kaprodi";
		$data['judul'] = "Data Kaprodi";
		$data['deskripsi'] = "Manage Data Kaprodi";

		$data['modal_tambah_kaprodi'] = show_my_modal('modals/modal_tambah_kaprodi', 'tambah-Kaprodi', $data);

		$this->template->views('kaprodi/home', $data);
	}

	public function tampil() {
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$this->load->view('kaprodi/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required');
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kepala Prodi', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_kaprodi->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Kaprodi Berhasil ditambah'));
				redirect('Kaprodi');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Kaprodi Gagal ditambah'));
				redirect('Kaprodi');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Kaprodi');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataKaprodi'] = $this->M_kaprodi->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_kaprodi', 'update-Kaprodi', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required');
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kepala Prodi', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_kaprodi->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data kaprodi Berhasil diubah'));
				redirect('Kaprodi');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data kaprodi Gagal diubah'));
				redirect('Kaprodi');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Kaprodi');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_kaprodi->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data kaprodi Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data kaprodi Gagal dihapus', '20px');
		}
	}
}