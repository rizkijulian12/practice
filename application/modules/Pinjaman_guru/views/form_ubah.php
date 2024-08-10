<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('pinjaman_guru/proses_ubah/'.$record->id.'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)) ?>" method="post">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_peminjam" name="nama_guru" placeholder="Masukkan Nama Peminjam" value="<?= $record->nama_guru; ?>">
                  </div>
                </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul Buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" value="<?= $record->judul_buku; ?>">
                  </div>
                  </div>

                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Peminjaman</label>

                 <div class="col-sm-10">
                   <input type="date" class="form-control" id="tgl_meminjam" name="tgl_meminjam" value="<?= $record->tgl_meminjam; ?>">
                 </div>
               </div>

                 <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Buku</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tgl_mengembalikan" name="jumlah_buku" value="<?= $record->jumlah_buku; ?>">
                </div>
                </div>

                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

               <div class="col-sm-10">
                 <?php if($record->keterangan=="Belum Mengembalikan"):?>
                 <select class="form-control" name="keterangan">
                   <option value="Belum Mengembalikan">Belum Mengembalikan</option>
                   <option value="Sudah Mengembalikan">Sudah Mengembalikan</option>
                 </select>
                 <?php else: ?>
                   <select class="form-control" name="keterangan">
                     <option value="Sudah Mengembalikan">Sudah Mengembalikan</option>
                     <option value="Belum Mengembalikan">Belum Mengembalikan</option>
                   </select>
                 <?php endif; ?>
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
