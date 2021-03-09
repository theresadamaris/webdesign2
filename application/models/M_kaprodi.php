<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kaprodi extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM kaprodi";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM kaprodi WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
        $pw=md5($data['password']);
        if($data['password']==""){
            $sql = "UPDATE kaprodi SET nama_prodi='$data[nama_prodi]', 
            nama='$data[nama_kaprodi]',
            username='$data[username]'
            WHERE id='$data[id]'";
        }else{
            $sql = "UPDATE kaprodi SET nama_prodi='$data[nama_prodi]', 
            nama='$data[nama_kaprodi]',
            username='$data[username]',
            password='$pw'
            WHERE id='$data[id]'";
        }

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM kaprodi WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$pw=md5($data['password']);
		$sql = "INSERT INTO kaprodi VALUES(NULL,'$data[nama_prodi]','$data[nama_kaprodi]',
		'$data[username]','$pw','default.png','kaprodi')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
