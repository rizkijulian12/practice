<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('daftar_menu/proses_ubah/'.$record->id.'/'.$this->uri->segment(4)); ?>" method="post">
              <input type="hidden" name="id_resto" id="id_resto" value="<?= $this->uri->segment(3)?>">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Menu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Masukkan Nama Menu" value="<?= $record->nama_menu; ?>">
                  </div>
                </div>

               <div class="form-group">
                  <label for="exampleFileInput" class="col-sm-2 control-label">Gambar Menu</label>

                  <div class="col-sm-10">
                    <input type="file" id="gambar_menu" name="gambar_menu" value="<?= $record->foto_menu; ?>">
                  </div>
                  </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= $record->harga_menu; ?>">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('daftar_menu')?>"><button type="button" class="btn btn-default">Cancel</button></a>
                <button type="submit" class="btn btn-info pull-right" onclick="return confirm ('Apakah yakin anda ingin mengedit')"><i class="fa fa-check"></i></button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
