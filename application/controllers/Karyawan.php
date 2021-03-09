<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_karyawan');
		$this->load->model('M_jabatan');
		$this->load->model('M_bagian');
		$this->load->library('Pdf');
        $this->load->library('Autowrap');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataKaryawan'] = $this->M_karyawan->select_all();
		$data['dataBagian'] = $this->M_bagian->select_all();
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$data['page'] = "Karyawan";
		$data['judul'] = "Data Karyawan";
		$data['deskripsi'] = "Manage Data Karyawan";

		$data['modal_tambah_karyawan'] = show_my_modal('modals/modal_tambah_karyawan', 'tambah-Karyawan', $data);

		$this->template->views('karyawan/home', $data);
	}

	public function tampil() {
		$data['dataKaryawan'] = $this->M_karyawan->select_all();
		$data['dataBagian'] = $this->M_bagian->select_all();
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$this->load->view('karyawan/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
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

			$result = $this->M_karyawan->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Karyawan Berhasil ditambah'));
				redirect('Karyawan');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Karyawan Gagal ditambah'));
				redirect('Karyawan');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Karyawan');
		}
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataKaryawan'] = $this->M_karyawan->select_by_id($id);
		$data['dataBagian'] = $this->M_bagian->select_all();
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_karyawan', 'update-Karyawan', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_karyawan->update($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Karyawan Berhasil diubah'));
				redirect('Karyawan');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Karyawan Gagal diubah'));
				redirect('Karyawan');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Karyawan');
		}
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_karyawan->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data karyawan Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data karyawan Gagal dihapus', '20px');
		}
	}
	public function folio() {
        $pdf = new autowrap();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,7,'DATA DIRI KARYAWAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','',10);
		$pdf->SetWidths(array(50,5,90));
		$row = $this->M_karyawan->select_by_id($_GET['id']);
		$pdf->Row(array("NIK",":",$row->nik));
		$pdf->Row(array("Nama Lengkap",":",$row->nama_lengkap));
		$pdf->Row(array("Nama Panggilan",":",$row->nama_panggilan));
		$pdf->Row(array("Jenis Kelamin",":",$row->jk));
		$pdf->Row(array("Gol Darah",":",$row->gol_darah));
		$pdf->Row(array("Tempat Lahir",":",$row->tempat_lahir));
		$pdf->Row(array("Tanggal Lahir",":",$row->tgl_lahir));
		$pdf->Row(array("Tanggal masuk",":",$row->tgl_masuk));
		$pdf->Row(array("Nama Perusahaan",":","PT. Fukusuke Kogyo"));
		$pdf->Row(array("Agama",":",$row->agama));
		$pdf->Row(array("Bagian",":",$row->nama_bagian));
		$pdf->Row(array("Jabatan",":",$row->nama_jabatan));
		$pdf->Image("./assets/img/$row->foto",160,24,40,30);
        $pdf->Output();
    }
}