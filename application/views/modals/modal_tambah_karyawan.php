<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Karyawan</h3>

  <form id="form-tambah-Karyawan" action="<?php echo base_url('Karyawan/prosesTambah') ?>" method="POST" enctype="multipart/form-data">
     <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan NIK" name="nik" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama_lengkap" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Nama Pangil" name="nama_panggilan" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select name="jenis_kelamin"class="form-control"name="jenis_kelamin"aria-describedby="sizing-addon2">
         <option value=""selected disabled>Pilih Jenis kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>

    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select name="gol_darah"class="form-control"name="gol_darah"aria-describedby="sizing-addon2">
         <option value=""selected disabled>Pilih Gol Darah</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Tempat Lahir" name="tempat_lahir" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         TGL Lahir
      </span>
      <input type="date" class="form-control"  name="tgl_lahir" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         TGL Masuk
      </span>
      <input type="date" class="form-control"  name="tgl_masuk" aria-describedby="sizing-addon2">
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
    
      <div class="row">
       <div class="col-md-6">
       <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
        <select class="form-control"name="bagian"aria-describedby="sizing-addon2">
          <option value=""selected disabled>Pilih Bagian</option>
          <?php
          foreach ($dataBagian as $Bagian) {
            ?>
          <option value="<?=$Bagian->id;?>"><?=$Bagian->nama_bagian;?></option>
          <?PHP }?>
        </select>
        
      </div>
       </div>
       <div class="col-md-6">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            
          </span>
          <select class="form-control"name="jabatan"aria-describedby="sizing-addon2">
          <option value=""selected disabled>Pilih Jabatan</option>
          <?php
          foreach ($dataJabatan as $Jabatan) {
            ?>
          <option value="<?=$Jabatan->id_jabatan;?>"><?=$Jabatan->nama_jabatan;?></option>
          <?PHP }?>
        </select>
        </div>
       </div>

    </div>

    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-picture-o"></i>
      </span>
      <input type="file" class="form-control" id="foto" placeholder="Foto" name="foto"aria-describedby="sizing-addon2">
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