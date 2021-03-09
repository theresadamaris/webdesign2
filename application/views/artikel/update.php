<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <h3>Kirim Skipsi</h3>
  </div>
  <div class="box-body">
    <form class="form-horizontal" action="<?PHP echo base_url("Artikel/prosesUpdate");?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" 
    value="<?php echo $dataArtikel->id; ?>"name="id">
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Judul</label>
              <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Silahkan sisi Judul Artikel" 
            value="<?php echo $dataArtikel->judul; ?>"name="judul">
          </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Isi Artikel</label>
              <div class="col-sm-10">
            <textarea class="form-control ckeditor" id="editor1" name="uraian"required>
            <?php echo $dataArtikel->isi; ?></textarea>
          </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Tanggal </label>
              <div class="col-sm-4">
            <input type="date" class="form-control" name="tgl_post" value="<?php echo $dataArtikel->tgl_post; ?>">    
            </div>
            <label for="" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-4">
              <select class="form-control"name="kategori"aria-describedby="sizing-addon2">
                    <option value="" disabled>Pilih Kategori</option>
                    <option value="<?php echo $dataArtikel->kategori; ?>"selected><?php echo $dataArtikel->kategori; ?></option>
                    <option value="Exclusive">Exclusive</option>
                    <option value="Movie News">Movie News</option>
                    <option value="TV News">TV News</option>
                    <option value="Review">Review</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Meta Description</label>
              <div class="col-sm-10">
            <input type="text" class="form-control"maxlength="150" 
            value="<?php echo $dataArtikel->meta_deksripsi; ?>"placeholder="Silahkan Isi Meta Description dengan maksimal panjang 150 huruf" name="meta_deskripsi">
          </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Foto Sampul</label>
              <div class="col-sm-10">
              <img src="<?=base_url("assets/img/$dataArtikel->photo");?>" width="100px">
            <input type="file" class="form-control"name="foto"required>
          </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"id="submit-jumlah">OK</button>
            </div>
        </div>
        
        <div id="next-form1"></div>

        <div id="next-form2"></div>
        <div id="next-form3"></div>
        
    </form>
  </div>
</div>
