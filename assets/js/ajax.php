<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});

	window.onload = function() {
		tampilMahasiswa();
		tampilKaryawan();
		tampilBagian();
		tampilJabatan();
		tampilSkripsi();
		tampilSkripsi2();
		tampilOperator();
		tampilKaprodi();
		tampilArtikel();
		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable();
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}
//Skripsi
function tampilSkripsi2() {
		$.get('<?php echo base_url('Skripsi/tampil2'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Skripsi2').html(data);
			refresh();
		});
	}
function tampilSkripsi() {
		$.get('<?php echo base_url('Skripsi/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Skripsi').html(data);
			refresh();
		});
	}

	var id_Skripsi;
	$(document).on("click", ".konfirmasiHapus-Skripsi", function() {
		id_Skripsi = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataSkripsi", function() {
		var id = id_Skripsi;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Skripsi/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilSkripsi();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataSkripsi", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Skripsi/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Skripsi').modal('show');
		})
	})

	$('#tambah-Skripsi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Skripsi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//Skripsi

//Operator
function tampilOperator() {
		$.get('<?php echo base_url('Operator/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Operator').html(data);
			refresh();
		});
	}

	var id_Operator;
	$(document).on("click", ".konfirmasiHapus-Operator", function() {
		id_Operator = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataOperator", function() {
		var id = id_Operator;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Operator/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilOperator();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataOperator", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Operator/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Operator').modal('show');
		})
	})

	$('#tambah-Operator').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Operator').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//operator

	//kaprodi
	function tampilKaprodi() {
		$.get('<?php echo base_url('Kaprodi/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Kaprodi').html(data);
			refresh();
		});
	}

	var id_Kaprodi;
	$(document).on("click", ".konfirmasiHapus-Kaprodi", function() {
		id_Kaprodi = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataKaprodi", function() {
		var id = id_Kaprodi;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kaprodi/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilKaprodi();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataKaprodi", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kaprodi/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Kaprodi').modal('show');
		})
	})

	$('#tambah-Kaprodi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Kaprodi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//kaprodi


	//Bagian
	function tampilBagian() {
		$.get('<?php echo base_url('Bagian/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Bagian').html(data);
			refresh();
		});
	}

	var id_Bagian;
	$(document).on("click", ".konfirmasiHapus-Bagian", function() {
		id_Bagian = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataBagian", function() {
		var id = id_Bagian;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Bagian/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilBagian();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataBagian", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Bagian/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Bagian').modal('show');
		})
	})

	$('#tambah-Bagian').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Bagian').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//Bagian

	//Jabatan
	function tampilJabatan() {
		$.get('<?php echo base_url('Jabatan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Jabatan').html(data);
			refresh();
		});
	}

	var id_Jabatan;
	$(document).on("click", ".konfirmasiHapus-Jabatan", function() {
		id_Jabatan = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataJabatan", function() {
		var id = id_Jabatan;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Jabatan/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilJabatan();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataJabatan", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Jabatan/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Jabatan').modal('show');
		})
	})

	$('#tambah-Jabatan').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Jabatan').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//Jabatan

	//Karyawan
	function tampilKaryawan() {
		$.get('<?php echo base_url('Karyawan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Karyawan').html(data);
			refresh();
		});
	}

	var id_Karyawan;
	$(document).on("click", ".konfirmasiHapus-Karyawan", function() {
		id_Karyawan = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataKaryawan", function() {
		var id = id_Karyawan;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Karyawan/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilKaryawan();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataKaryawan", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Karyawan/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Karyawan').modal('show');
		})
	})

	$('#tambah-Karyawan').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Karyawan').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//Karyawan


	//Artikel
	function tampilArtikel() {
		$.get('<?php echo base_url('Artikel/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Artikel').html(data);
			refresh();
		});
	}

	var id_Artikel;
	$(document).on("click", ".konfirmasiHapus-Artikel", function() {
		id_Artikel = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataArtikel", function() {
		var id = id_Artikel;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Artikel/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilArtikel();
			$('.msg').html(data);
			effect_msg();
		})
	})
 
	//Artikel
	

	//Mahasiswa
	function tampilMahasiswa() {
		$.get('<?php echo base_url('Mahasiswa/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-Mahasiswa').html(data);
			refresh();
		});
	}

	var id_Mahasiswa;
	$(document).on("click", ".konfirmasiHapus-Mahasiswa", function() {
		id_Mahasiswa = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataMahasiswa", function() {
		var id = id_Mahasiswa;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Mahasiswa/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilMahasiswa();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataMahasiswa", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Mahasiswa/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-Mahasiswa').modal('show');
		})
	})

	$('#tambah-Mahasiswa').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-Mahasiswa').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	//Mahasiswa

	
</script>