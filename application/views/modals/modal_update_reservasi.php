<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Type Kamar</h3>
      <form method="POST" id="form-update-Reservasi">
        <input type="hidden" name="id" value="<?php echo $dataReservasi->kd_type_kamar; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="fa fa-bed"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nama Type Kamar" name="nama_type_kamar" 
          aria-describedby="sizing-addon2" value="<?php echo $dataReservasi->nama_type_kamar; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            Rp.
          </span>
          <input type="number" class="form-control" placeholder="Harga Type Kamar" name="harga_type_kamar" 
          aria-describedby="sizing-addon2" value="<?php echo $dataReservasi->harga_type_kamar; ?>">
        </div> 
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="fa fa-plus-square"></i>
          </span>
          <input type="text" class="form-control" placeholder="Fasilitas Type Kamar" name="fasilitas_type_kamar" 
          aria-describedby="sizing-addon2" value="<?php echo $dataReservasi->fasilitas_type_kamar; ?>">
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