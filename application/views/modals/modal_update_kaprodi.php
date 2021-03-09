<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Kaprodi</h3>
      <form id="form-update-Kaprodi"action="<?php echo base_url('Kaprodi/prosesUpdate') ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $dataKaprodi->id; ?>">
        <div class="input-group form-group">
       <span class="input-group-addon" id="sizing-addon2">
         
        </span>
        <input type="text" class="form-control" placeholder="Masukan Nama Prodi" name="nama_prodi"
        value="<?php echo $dataKaprodi->nama_prodi; ?>" aria-describedby="sizing-addon2">
      </div>
      <div class="input-group form-group">
       <span class="input-group-addon" id="sizing-addon2">
         
        </span>
        <input type="text" class="form-control" placeholder="Masukan Nama Kepala Prodi" name="nama_kaprodi"
        value="<?php echo $dataKaprodi->nama; ?>" aria-describedby="sizing-addon2">
      </div>
      <div class="input-group form-group">
       <span class="input-group-addon" id="sizing-addon2">
         
        </span>
        <input type="text" class="form-control" placeholder="Masukan Username" name="username"
        value="<?php echo $dataKaprodi->username; ?>" aria-describedby="sizing-addon2">
      </div>

      <div class="input-group form-group">
       <span class="input-group-addon" id="sizing-addon2">
         
        </span>
        <input type="password" class="form-control" placeholder="Masukan password" name="password"
         aria-describedby="sizing-addon2">
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