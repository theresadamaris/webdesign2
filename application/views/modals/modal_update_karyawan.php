
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Karyawan</h3>
      <form id="form-update-Karyawan"action="<?php echo base_url('Karyawan/prosesUpdate') ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $dataKaryawan->nik; ?>">
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan NIK" name="nik" value="<?=$dataKaryawan->nik;?>" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" 
      value="<?php echo $dataKaryawan->nama_lengkap; ?>"name="nama_lengkap" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Nama Pangil" 
      value="<?php echo $dataKaryawan->nama_panggilan; ?>" name="nama_panggilan" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select name="jenis_kelamin"class="form-control"name="jenis_kelamin"aria-describedby="sizing-addon2">
         <option value="" disabled>Pilih Jenis kelamin</option>
         <?PHP 
         if($dataKaryawan->jk=="L"){
         ?>
         <option value="L"selected>Laki - laki</option> 
         <option value="P">Perempuan</option>
         <?PHP }else{ ?>
          <option value="L">Laki - laki</option> 
        <option value="P"selected>Perempuan</option>
        <?PHP } ?>
      </select>
    </div>

    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select name="gol_darah"class="form-control"name="gol_darah"aria-describedby="sizing-addon2">
         <option value="" disabled>Pilih Gol Darah</option>
         <option value="<?php echo $dataKaryawan->gol_darah; ?>"selected><?php echo $dataKaryawan->gol_darah; ?></option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Tempat Lahir" 
      value="<?php echo $dataKaryawan->tempat_lahir; ?>"name="tempat_lahir" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         TGL Lahir
      </span>
      <input type="date" class="form-control"  name="tgl_lahir"
      value="<?php echo $dataKaryawan->tgl_lahir; ?>" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         TGL Masuk
      </span>
      <input type="date" class="form-control"  
      value="<?php echo $dataKaryawan->tgl_masuk; ?>"name="tgl_masuk" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <select class="form-control"name="agama"aria-describedby="sizing-addon2">
        <option value="" disabled>Pilih Agama</option>
        <option value="<?php echo $dataKaryawan->agama; ?>"selected><?php echo $dataKaryawan->agama; ?></option>
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
          <option value="" disabled>Pilih Bagian</option>
          <option value="<?php echo $dataKaryawan->id; ?>"selected><?php echo $dataKaryawan->nama_bagian; ?></option>
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
          <option value="" disabled>Pilih Jabatan</option>
          <option value="<?php echo $dataKaryawan->id_jabatan; ?>"selected><?php echo $dataKaryawan->nama_jabatan; ?></option>
          <?php
          foreach ($dataJabatan as $Jabatan) {
            ?>
          <option value="<?=$Jabatan->id_jabatan;?>"><?=$Jabatan->nama_jabatan;?></option>
          <?PHP }?>
        </select>
        </div>
       </div>

    </div>
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
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