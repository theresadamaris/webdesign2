<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_operator');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataOperator'] = $this->M_operator->select_all();

		$data['page'] = "Operator";
		$data['judul'] = "Data Operator";
		$data['deskripsi'] = "Manage Data Operator";

		$data['modal_tambah_operator'] = show_my_modal('modals/modal_tambah_operator', 'tambah-Operator', $data);

		$this->template->views('operator/home', $data);
	}

	public function tampil() {
		$data['dataOperator'] = $this->M_operator->select_all();
		$this->load->view('operator/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_operator->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Operator Berhasil ditambah'));
				redirect('Operator');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Operator Gagal ditambah'));
				redirect('Operator');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Operator');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataOperator'] = $this->M_operator->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_operator', 'update-Operator', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_operator->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data operator Berhasil diubah'));
				redirect('Operator');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data operator Gagal diubah'));
				redirect('Operator');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Operator');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_operator->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data operator Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data operator Gagal dihapus', '20px');
		}
	}
}