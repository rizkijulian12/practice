<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('course/proses_ubah_materi/'.$record->id.'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)) ?>" method="post">
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Link Embed</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_buku" name="link_embed" placeholder="Link Embed" value="<?= $record->link_embed?>" required>
                  </div>
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
