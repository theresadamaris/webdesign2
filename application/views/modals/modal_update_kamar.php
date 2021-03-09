<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Kamar</h3>
      <form id="form-update-Kamar"action="<?php echo base_url('Kamar/prosesUpdate') ?>" method="POST" enctype="multipart/form-data">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="fa fa-bed"></i>
          </span>
          <input type="text" class="form-control" placeholder="ID Kamar" name="kode_kamar"
          id="kode_kamar" aria-describedby="sizing-addon2"value="<?php echo $dataKamar->kode_kamar; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            Type
          </span>
          <select name="type_kamar" class="form-control" id="type_kamar" aria-describedby="sizing-addon2">
            <?php
              foreach ($dataTypeKamar as $typeKamar) {
                  if($typeKamar->kd_type_kamar==$dataKamar->type_kamar){
                ?>
                <option value="<?php echo $typeKamar->kd_type_kamar; ?>"><?php echo $typeKamar->nama_type_kamar; ?></option>
                <?php
                  }  
               }?>
            <?php
              foreach ($dataTypeKamar as $typeKamar) {
                  if($typeKamar->kd_type_kamar!=$dataKamar->type_kamar){
                ?>
                <option value="<?php echo $typeKamar->kd_type_kamar; ?>"><?php echo $typeKamar->nama_type_kamar; ?></option>
                <?php
                  } 
               }?>
          </select>
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