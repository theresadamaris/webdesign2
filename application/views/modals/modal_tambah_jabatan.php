<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Jabatan</h3>

  <form id="form-tambah-Jabatan" action="<?php echo base_url('Jabatan/prosesTambah') ?>" method="POST" enctype="multipart/form-data">
     
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
         
      </span>
      <input type="text" class="form-control" placeholder="Masukan Nama Jabatan" name="nama_jabatan" aria-describedby="sizing-addon2">
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