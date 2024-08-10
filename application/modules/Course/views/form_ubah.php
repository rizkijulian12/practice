<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('course/proses_ubah/'.$record->id.'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)) ?>" method="post">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_peminjam" name="judul" placeholder="Masukkan Nama Peminjam" value="<?= $record->judul; ?>">
                  </div>
                </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Judul Buku" value="<?= $record->deskripsi; ?>">
                  </div>
                  </div>

                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

               <div class="col-sm-10">
                 <?php if($record->durasi=="1 Jam"):?>
                 <select class="form-control" name="durasi">
                   <option value="1 Jam">1 Jam</option>
                   <option value="2 Jam">2 Jam</option>
                   <option value="3 Jam">3 Jam</option>
                   <option value="4 Jam">4 Jam</option>
                   <option value="5 Jam">5 Jam</option>
                   <option value="6 Jam">6 Jam</option>
                 </select>
                 <?php elseif($record->durasi=="2 Jam"): ?>
                  <select class="form-control" name="durasi">
                   <option value="2 Jam">2 Jam</option>
                   <option value="1 Jam">1 Jam</option>
                   <option value="3 Jam">3 Jam</option>
                   <option value="4 Jam">4 Jam</option>
                   <option value="5 Jam">5 Jam</option>
                   <option value="6 Jam">6 Jam</option>
                  </select>
                  <?php elseif($record->durasi=="3 Jam"): ?>
                  <select class="form-control" name="durasi">
                   <option value="3 Jam">3 Jam</option>
                   <option value="1 Jam">1 Jam</option>
                   <option value="2 Jam">2 Jam</option>
                   <option value="4 Jam">4 Jam</option>
                   <option value="5 Jam">5 Jam</option>
                   <option value="6 Jam">6 Jam</option>
                  </select>
                  <?php elseif($record->durasi=="4 Jam"): ?>
                  <select class="form-control" name="durasi">
                   <option value="4 Jam">4 Jam</option>
                   <option value="1 Jam">1 Jam</option>
                   <option value="2 Jam">2 Jam</option>
                   <option value="3 Jam">3 Jam</option>
                   <option value="5 Jam">5 Jam</option>
                   <option value="6 Jam">6 Jam</option>
                  </select>
                  <?php elseif($record->durasi=="5 Jam"): ?>
                  <select class="form-control" name="durasi">
                   <option value="5 Jam">5 Jam</option>
                   <option value="1 Jam">1 Jam</option>
                   <option value="2 Jam">2 Jam</option>
                   <option value="3 Jam">3 Jam</option>
                   <option value="4 Jam">4 Jam</option>
                   <option value="6 Jam">6 Jam</option>
                  </select>
                  <?php else :?>
                    <select class="form-control" name="durasi">
                    <option value="6 Jam">6 Jam</option>
                    <option value="1 Jam">1 Jam</option>
                   <option value="2 Jam">2 Jam</option>
                   <option value="3 Jam">3 Jam</option>
                   <option value="4 Jam">4 Jam</option>
                   <option value="5 Jam">5 Jam</option>
                   
                  </select>
                 <?php endif; ?>
               </div>
               </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="id" value="<?=$record->id?>">
                <a href="<?= base_url('/')?>"><button type="submit" class="btn btn-default pull-left">Batalkan</button></a>
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
