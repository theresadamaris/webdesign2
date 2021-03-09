<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_skripsi extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM skripsi";

		$data = $this->db->query($sql);

		return $data->result();
	}
    public function select_all_mhs($id) {
		$sql = "SELECT * FROM skripsi WHERE id_mahasiswa = '{$id}'";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_all_kaprodi($id) {
		$sql = "SELECT * FROM skripsi WHERE id_prodi = '{$id}'";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_by_id($id) {
		$sql = "SELECT * FROM skripsi WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE skripsi SET nilai='$data[nilai]'
		 WHERE id='$data[id]'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM type_kamar WHERE kd_type_kamar='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		
		$sql = "INSERT INTO skripsi VALUES(NULL,'$data[judul]',
        '$data[tahun]','$data[dokumen]','$data[format]','$data[dosbing]',
        '$data[id_mahasiswa]','$data[id_prodi]','0')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
