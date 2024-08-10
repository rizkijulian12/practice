<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->session->userdata('message'); ?>
        <form class="form-horizontal" action="<?= base_url('course/proses_tambah/')?>" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_peminjam" name="judul" placeholder="Judul" required>
                  </div>
                </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_buku" name="deskripsi" placeholder="Deskripsi" required>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Durasi</label>

                  <div class="col-sm-10">
                  <select class="form-control" name="durasi">
                   <option value="1 Jam">1 Jam</option>
                   <option value="2 Jam">2 Jam</option>
                   <option value="3 Jam">3 Jam</option>
                   <option value="4 Jam">4 Jam</option>
                   <option value="5 Jam">5 Jam</option>
                   <option value="6 Jam">6 Jam</option>
                 </select>
                </div>
              </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('course')?>"><input type="button" class="btn btn-default pull-left" value="Batalkan"></a>
                <input type="submit" class="btn btn-primary pull-right" value="Submit">
              </div>
            </form>
              <!-- /.box-footer -->
          </div>
</div>
<script src="<?= base_url('assets/plugins/jquery/dist/jquery.mask.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
//format nomor hp
         $( '#tlp_warung' ).mask('0000-0000-0000');

    })
</script>
