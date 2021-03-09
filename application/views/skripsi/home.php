<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
        <!-- <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-Mahasiswa"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button> -->
    </div>
    <!-- <div class="col-md-3">
        <a href="<?php echo base_url('Mahasiswa/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-Mahasiswa"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tahun</th>
          <th>Format</th>
          <th>Mahasiswa</th>
          <th>Prodi</th>
          <th>Dosbing</th>
          <th>Hasil Review</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-Skripsi">
        
      </tbody>
    </table>
  </div> 
</div>

<?php echo $modal_tambah_skripsi; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataSkripsi', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Skripsi';
  $data['url'] = 'Skripsi/import';
  echo show_my_modal('modals/modal_import', 'import-Skripsi', $data);
?>