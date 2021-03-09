<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_operator extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM operator";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM operator WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
        $pw=md5($data['password']);
        if($data['password']==""){
            $sql = "UPDATE operator SET nama='$data[nama]', 
            username='$data[username]'
            WHERE id='$data[id]'";
        }else{
            $sql = "UPDATE operator SET nama='$data[nama]', 
            username='$data[username]',
            password='$pw'
            WHERE id='$data[id]'";
        }

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM operator WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$pw=md5($data['password']);
		$sql = "INSERT INTO operator VALUES(NULL,'$data[username]',
        '$pw','$data[nama]','default.png','operator')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
