<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <h3>Kirim Skipsi</h3>
  </div>
  <div class="box-body">
    <form class="form-horizontal" action="<?PHP echo base_url("Skripsi/prosesTambah");?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Judul Skirpsi</label>
              <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Silahkan sisi Judul Skripsi" name="judul">
          </div>
        </div>
        
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Tahun </label>
              <div class="col-sm-4">
            <input type="number" class="form-control" name="tahun">    
            </div>
            <label for="" class="col-sm-2 control-label">Format</label>
              <div class="col-sm-4">
              <select class="form-control"name="format"aria-describedby="sizing-addon2">
                    <option value=""selected disabled>Pilih Format</option>
                    <option value="APA">APA</option>
                    <option value="IEEE">IEEE</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">Nama Dosen Pembimbing</label>
              <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Silahkan sisi nama dosen pembimbing anda" name="dosbing">
          </div>
        </div>
        <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">File Skripsi (Berupa PDF)</label>
              <div class="col-sm-10">
            <input type="file" class="form-control"name="dokumen">
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
