<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skripsi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->model('M_mahasiswa');
        $this->load->model('M_kaprodi');
        $this->load->model('M_skripsi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataMahasiswa'] = $this->M_mahasiswa->select_all();
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$data['dataSkripsi'] = $this->M_skripsi->select_all();
		$data['page'] = "Skripsi";
		$data['judul'] = "Data Skripsi";
		$data['deskripsi'] = "Kumpulan Data Skripsi";

		$data['modal_tambah_skripsi'] = show_my_modal('modals/modal_tambah_skripsi', 'tambah-Skripsi', $data);

		$this->template->views('skripsi/home2', $data);
	}
	public function tampil2() {
        $data['userdata'] = $this->userdata;
        $data['dataMahasiswa'] = $this->M_mahasiswa->select_all2();
        $data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$data['dataSkripsi'] = $this->M_skripsi->select_all();
		$this->load->view('skripsi/list_data2', $data);
    }
	// public function tampil() {
		// $data['dataMahasiswa'] = $this->M_mahasiswa->select_all();
		// $this->load->view('mahasiswa/list_data', $data);
    // }
    
    public function LihatRewiew() {
		$data['userdata'] = $this->userdata;
		$data['dataMahasiswa'] = $this->M_mahasiswa->select_all();
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		if($this->userdata->akses=="mahasiswa"){
		$data['dataSkripsi'] = $this->M_skripsi->select_all_mhs($this->userdata->id);
		}else if($this->userdata->akses=="kaprodi"){
		$data['dataSkripsi'] = $this->M_skripsi->select_all_kaprodi($this->userdata->id);
		}
		$data['page'] = "LihatRewiew";
		$data['judul'] = "Data Skripsi";
		$data['deskripsi'] = "Hasil Review Skripsi";

		$data['modal_tambah_skripsi'] = show_my_modal('modals/modal_tambah_skripsi', 'tambah-Skirpsi', $data);

		$this->template->views('skripsi/home', $data);
    }
    public function tampil() {
        $data['userdata'] = $this->userdata;
        $data['dataMahasiswa'] = $this->M_mahasiswa->select_all2();
        $data['dataKaprodi'] = $this->M_kaprodi->select_all();
		if($this->userdata->akses=="mahasiswa"){
		$data['dataSkripsi'] = $this->M_skripsi->select_all_mhs($this->userdata->id);
		}else if($this->userdata->akses=="kaprodi"){
		$data['dataSkripsi'] = $this->M_skripsi->select_all_kaprodi($this->userdata->id);
		}
		$this->load->view('skripsi/list_data', $data);
    }

	public function prosesTambah() {
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
        $this->form_validation->set_rules('format', 'format', 'trim|required');
        $this->form_validation->set_rules('dosbing', 'dosbing', 'trim|required');
        
        $data = $this->input->post();
		$data['id_mahasiswa'] = $this->userdata->id;
		$data['id_prodi'] = $this->userdata->id_prodi;
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/doc/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '20000';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('dokumen')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data_dokumen = $this->upload->data();
				$data['dokumen'] = $data_dokumen['file_name'];
			}

			$result = $this->M_skripsi->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Skripsi Berhasil dikirim'));
				redirect('Home');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data  Skripsi Gagal dikirim'));
				redirect('Home');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Home');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataSkripsi'] = $this->M_skripsi->select_by_id($id);
		$data['dataMahasiswa'] = $this->M_mahasiswa->select_all();
		$data['dataKaprodi'] = $this->M_kaprodi->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_skripsi', 'update-Skripsi', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_skripsi->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data nilai Berhasil diinputkan'));
				redirect('Skripsi/LihatRewiew');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data nilai Gagal diinputkan'));
				redirect('Skripsi/LihatRewiew');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Skripsi/LihatRewiew');
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