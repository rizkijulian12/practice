<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Warung</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->session->userdata('message'); ?>
        <form class="form-horizontal" action="<?= base_url('bulan/proses_tambah')?>" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Bulan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Bulan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
                  </div>
                </div>



              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('bulan')?>"><input type="button" class="btn btn-default pull-left" value="Batalkan"></a>
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
