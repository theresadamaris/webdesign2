<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM jabatan";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM jabatan WHERE id_jabatan = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE jabatan SET nama_jabatan='$data[nama_jabatan]'
				WHERE id_jabatan='$data[id]'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM jabatan WHERE id_jabatan='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO jabatan VALUES(NULL,'$data[nama_jabatan]')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
