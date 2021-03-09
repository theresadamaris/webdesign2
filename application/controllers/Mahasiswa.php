<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_mahasiswa');
		$this->load->model('M_kaprodi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataMahasiswa'] = $this->M_mahasiswa->select_all2();
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$data['page'] = "Mahasiswa";
		$data['judul'] = "Data Mahasiswa";
		$data['deskripsi'] = "Manage Data Mahasiswa";

		$data['modal_tambah_mahasiswa'] = show_my_modal('modals/modal_tambah_mahasiswa', 'tambah-Mahasiswa', $data);

		$this->template->views('mahasiswa/home', $data);
	}

	public function tampil() {
		$data['dataMahasiswa'] = $this->M_mahasiswa->select_all2();
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$this->load->view('mahasiswa/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin Mahasiswa', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Mahasiswa', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('prodi', 'Prodi', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_mahasiswa->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Mahasiswa Berhasil ditambah'));
				redirect('Mahasiswa');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Mahasiswa Gagal ditambah'));
				redirect('Mahasiswa');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Mahasiswa');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataMahasiswa'] = $this->M_mahasiswa->select_by_id($id);
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_mahasiswa', 'update-Mahasiswa', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin Mahasiswa', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Mahasiswa', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('prodi', 'Prodi', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_mahasiswa->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data mahasiswa Berhasil diubah'));
				redirect('Mahasiswa');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data mahasiswa Gagal diubah'));
				redirect('Mahasiswa');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Mahasiswa');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_mahasiswa->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data mahasiswa Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data mahasiswa Gagal dihapus', '20px');
		}
	}
}