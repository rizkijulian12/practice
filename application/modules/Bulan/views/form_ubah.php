<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Warung</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('bulan/proses_ubah/'.$record->id) ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Bulan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Bulan" value="<?= $record->nama_bulan; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="<?= $record->tahun; ?>">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="id" value="<?=$record->id?>">
                <a href="<?= base_url('bulan')?>"><button type="submit" class="btn btn-default pull-left">Batalkan</button></a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-check"></i></button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
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
