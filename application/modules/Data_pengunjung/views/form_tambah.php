<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Warung</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->session->userdata('message'); ?>
        <form class="form-horizontal" action="<?= base_url('data_pengunjung/proses_tambah/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_peminjam" name="nama" placeholder="Nama Peminjam" required>
                  </div>
                </div>

                   <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas" required>
                  </div>
                  </div>

                 <div class="form-group">
                <label for="exampleInputFile" class="col-sm-2 control-label">Tanggal</label>

                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tgl_meminjam" name="tanggal" required>
                </div>
                </div>

                <div class="form-group">
                <label for="exampleInputFile" class="col-sm-2 control-label">Tujuan</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tgl_meminjam" name="tujuan" placeholder="Tujuan" required>
                </div>
                </div>
                <?php 
                $bulan = $this->uri->segment(3);
                $tahun = $this->uri->segment(4);
                ?>
                <input type="hidden" name="keterangan" value="Belum Mengembalikan">
                <input type="hidden" name="bulan" value="<?= $bulan ?>">
                <input type="hidden" name="tahun" value="<?= $tahun ?>">

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('data_pengunjung')?>"><input type="button" class="btn btn-default pull-left" value="Batalkan"></a>
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
