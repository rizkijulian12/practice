<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('data_pengunjung/proses_ubah/'.$record->id.'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)) ?>" method="post">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_peminjam" name="nama" placeholder="Masukkan Nama Peminjam" value="<?= $record->nama; ?>">
                  </div>
                </div>

                   <div class="form-group">
                  <label for="exampleFileInput" class="col-sm-2 control-label">Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" id="kelas" class="form-control" name="kelas" placeholder="Kelas" value="<?= $record->kelas; ?>">
                  </div>
                  </div>

                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>

                 <div class="col-sm-10">
                   <input type="date" class="form-control" id="tgl_meminjam" name="tanggal" value="<?= $record->tanggal; ?>">
                 </div>
               </div>

                 <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tujuan</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tgl_mengembalikan" name="tujuan" value="<?= $record->tujuan; ?>">
                </div>
                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="id" value="<?=$record->id?>">
                <a href="<?= base_url('restoran')?>"><button type="submit" class="btn btn-default pull-left">Batalkan</button></a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-check"></i></button>
              </div>
              <!-- /.box-footer -->
            </form>
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
