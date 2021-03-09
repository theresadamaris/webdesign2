<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_auth');
	}
	
	public function index() {
		$session = $this->session->userdata('status');

		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect('Home');
		}
	} 

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				// $tgl=date('d');
				// $tgl=(int)$tgl;
				// $tgl--;
				// if($tgl<10){
				// 	$tgl="0".$tgl;
				// }
				// $check_out=$this->M_reservasi->caricheckout($tgl);
				// foreach ($check_out as $carikamar) {
				// 	if($carikamar->kamar!=NULL){
				// 		$datakamar=explode(" | ",$carikamar->kamar);
				// 		for ($i=0; $i < count($datakamar)-1; $i++) { 
				// 			$kamartersedia=$this->M_reservasi->tersedia($datakamar[$i]);
				// 		}
				// 	}
				// }
				
				$this->session->set_userdata($session);
				redirect('Home');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Auth');
		}
	}
	public function registrasi() {
		$this->load->view('registrasi');
	}
	
	public function prosesTambah() {
	
		$data = $this->input->post();
		
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

			$result = $this->M_auth->insert($data);
			if ($result > 0) {
				// $this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Registrasi Berhasil ditambah'));
				redirect('Auth');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Registrasi Gagal ditambah'));
				redirect('Auth/registrasi');
			}
		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */