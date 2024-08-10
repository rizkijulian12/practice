<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Warung</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->session->userdata('message'); ?>
        <form action="<?= base_url('restoran/proses_tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pemilik</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Masukkan Nama Pemilik">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Warung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_warung" name="nama_warung" placeholder="Masukkan Nama Warung">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Warung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat_warung" name="alamat_warung" placeholder="Alamat Warung">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Fhoto Warung</label>

                  <div class="col-sm-10">
                    <input type="file" id="foto_warung" name="file">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tlp Warung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tlp_warung" name="tlp_warung" placeholder="Masukkan Tlp Warung">
                  </div>
                  </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('restoran')?>"><button type="button" class="btn btn-default">Cancel</button></a>
                <input type="submit" class="btn btn-primary pull-right" value="Submit">
              </div>
            </form>
              <!-- /.box-footer -->
          </div>
</div>
