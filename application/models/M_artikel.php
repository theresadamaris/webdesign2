<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM artikel";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_header() {
		$sql = "SELECT * FROM artikel ORDER BY RAND() limit 1";

		$data = $this->db->query($sql);

		return $data->row();
	}
	public function select_terbaru() {
		$sql = "SELECT * FROM artikel order by tgl_post asc limit 3";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_random() {
		$sql = "SELECT * FROM artikel ORDER BY RAND() limit 2";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_by_id($id) {
		$sql = "SELECT * FROM artikel WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	public function select_by_kategori($kategori) {
		$sql = "SELECT * FROM artikel WHERE kategori = '{$kategori}' limit 2";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_by_kategori2($kategori) {
		$sql = "SELECT * FROM artikel WHERE kategori = '{$kategori}' limit 3";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function update($data) {
		$sql = "UPDATE artikel SET judul='$data[judul]',
		isi='$data[uraian]',
		meta_deksripsi='$data[meta_deskripsi]',
		tgl_post='$data[tgl_post]',
		photo='$data[foto]',
		author='$data[author]',
		kategori='$data[kategori]' WHERE id='$data[id]'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM artikel WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO artikel VALUES(NULL,'$data[judul]',
		'$data[uraian]','$data[meta_deskripsi]','$data[tgl_post]',
		'$data[foto]','$data[author]','$data[kategori]')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}
