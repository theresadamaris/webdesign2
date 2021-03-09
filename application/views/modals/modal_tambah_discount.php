<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Discount</h3>

  <form id="form-tambah-Discount" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        Type
      </span>
      <select name="type_kamar" class="form-control" id="type_kamar" aria-describedby="sizing-addon2">
        <?php
          foreach ($dataTypeKamar as $typeKamar) {
        ?>
        <option value="<?php echo $typeKamar->kd_type_kamar; ?>"><?php echo $typeKamar->nama_type_kamar; ?></option>
          <?php }?>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        %
      </span>
      <input type="text" class="form-control" placeholder="Jumlah Discount" name="jumlah_discount" 
      aria-describedby="sizing-addon2">
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