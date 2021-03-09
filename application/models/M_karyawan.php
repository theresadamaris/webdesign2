<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM karyawan JOIN bagian,jabatan WHERE 
		karyawan.bagian=bagian.id and karyawan.jabatan=jabatan.id_jabatan ";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_all2() {
		$sql = "SELECT * FROM mahasiswa";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM karyawan JOIN bagian,jabatan WHERE 
		karyawan.bagian=bagian.id and karyawan.jabatan=jabatan.id_jabatan and nik = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE karyawan SET nik='$data[nik]', 
				nama_lengkap='$data[nama_lengkap]',
				nama_panggilan='$data[nama_panggilan]',
				tgl_lahir='$data[tgl_lahir]',
				tgl_masuk='$data[tgl_masuk]',
				tempat_lahir='$data[tempat_lahir]',
				agama='$data[agama]',
				bagian='$data[bagian]',
				jabatan='$data[jabatan]'
				WHERE nik='$data[id]'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM karyawan WHERE nik='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO karyawan VALUES('$data[nik]','$data[nama_lengkap]',
		'$data[nama_panggilan]','$data[jenis_kelamin]','$data[gol_darah]',
		'$data[tempat_lahir]','$data[tgl_lahir]','$data[tgl_masuk]','$data[agama]','$data[bagian]','$data[jabatan]','$data[foto]')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	
}
