<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	public function login($user, $pass) {
		$this->db->select('*');
		$this->db->from('operator');
		$this->db->where('username', $user);
		$this->db->where('password', md5($pass));

		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			$this->db->select('*');
			$this->db->from('mahasiswa');
			$this->db->where('username', $user);
			$this->db->where('password', md5($pass));
			$data = $this->db->get();
			if ($data->num_rows() == 1) {
				return $data->row();
			}else{

				$this->db->select('*');
				$this->db->from('kaprodi');
				$this->db->where('username', $user);
				$this->db->where('password', md5($pass));
				$data = $this->db->get();
				if ($data->num_rows() == 1) {
					return $data->row();
				}else{
					return false;
				}

			}
			
		}
	}

	public function insert($data) {
		$data['password']=md5($data['password']);
		$sql = "INSERT INTO operator VALUES(NULL,'$data[username]','$data[password]','$data[nama]','$data[foto]','client')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */