<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
        <a class="form-control btn btn-primary" href="<?=base_url('Artikel/tambah');?>">
        <i class="glyphicon glyphicon-plus-sign"></i> Buat Artikel</a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Judul Artikel</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-Artikel">
        
      </tbody>
    </table>
  </div> 
</div>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataArtikel', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Artikel';
  $data['url'] = 'Artikel/import';
  echo show_my_modal('modals/modal_import', 'import-Artikel', $data);
?>