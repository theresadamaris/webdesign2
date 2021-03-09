<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Mahasiswa</h3>

  <form id="form-tambah-Mahasiswa" action="<?php echo base_url('Mahasiswa/prosesTambah') ?>" method="POST" enctype="multipart/form-data">
     <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan NIM" name="nim" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select name="jenis_kelamin"class="form-control"name="jenis_kelamin"aria-describedby="sizing-addon2">
         <option value=""selected disabled>Pilih Jenis kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="date" class="form-control"  name="tgl_lahir" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select class="form-control"name="agama"aria-describedby="sizing-addon2">
        <option value=""selected disabled>Pilih Agama</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        <option value="Konghuchu">Konghuchu</option>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <div class="row">
       <div class="col-md-6">
       
        <select class="form-control"name="prodi"aria-describedby="sizing-addon2">
          <option value=""selected disabled>Pilih Prodi</option>
          <?php
          foreach ($dataKaprodi as $Prodi) {
            ?>
          <option value="<?=$Prodi->id;?>"><?=$Prodi->nama_prodi;?></option>
          <?PHP }?>
        </select>
       </div>
       <div class="col-md-6">
       
        <select class="form-control"name="kelas"aria-describedby="sizing-addon2">
          <option value=""selected disabled>Pilih Kelas</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
       </div>
      </div>

    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>


<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>