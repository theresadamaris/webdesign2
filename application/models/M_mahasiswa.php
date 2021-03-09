<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM mahasiswa JOIN kaprodi WHERE 
		mahasiswa.id_prodi=kaprodi.id";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_all2() {
		$sql = "SELECT * FROM mahasiswa";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM mahasiswa WHERE mahasiswa.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$pw=md5($data['nim']);
		$sql = "UPDATE mahasiswa SET nim='$data[nim]', 
				nama='$data[nama]',
				jenis_kelamin='$data[jenis_kelamin]',
				tgl_lahir='$data[tgl_lahir]',
				alamat='$data[alamat]',
				agama='$data[agama]',
				username='$data[nim]',
				password='$pw',
				id_prodi='$data[prodi]',
				kelas='$data[kelas]'
				WHERE id='$data[id]'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM mahasiswa WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$pw=md5($data['nim']);
		$sql = "INSERT INTO mahasiswa VALUES(NULL,'$data[nim]','$data[nama]',
		'$data[jenis_kelamin]','$data[tgl_lahir]','$data[alamat]',
		'$data[agama]','$data[nim]','$pw','default.png','mahasiswa','$data[prodi]','$data[kelas]')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
