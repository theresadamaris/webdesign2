<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <h3>Kirim Skipsi</h3>
  </div>
  <div class="box-body">
    <form class="form-horizontal" action="<?PHP echo base_url("Artikel/prosesTambah");?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Judul</label>
              <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Silahkan sisi Judul Artikel" name="judul">
          </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Isi Artikel</label>
              <div class="col-sm-10">
            <textarea class="form-control ckeditor" id="editor1" name="uraian"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Tanggal </label>
              <div class="col-sm-4">
            <input type="date" class="form-control" name="tgl_post" value="<?=date('Y-m-d');?>">    
            </div>
            <label for="" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-4">
              <select class="form-control"name="kategori"aria-describedby="sizing-addon2">
                    <option value=""selected disabled>Pilih Kategori</option>
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
            <input type="text" class="form-control"maxlength="150" placeholder="Silahkan Isi Meta Description dengan maksimal panjang 150 huruf" name="meta_deskripsi">
          </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Foto Sampul</label>
              <div class="col-sm-10">
            <input type="file" class="form-control"name="foto">
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
