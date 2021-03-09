<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagian extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM bagian";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM bagian WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE bagian SET nama_bagian='$data[nama_bagian]'
				WHERE id='$data[id]'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM bagian WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO bagian VALUES(NULL,'$data[nama_bagian]')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
