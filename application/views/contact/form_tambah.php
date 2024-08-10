 <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('contact/proses_tambah')?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label><div class="col-sm-10">
                    <input type="email" class="form-control" id="nama" name="email" placeholder="Masukkan Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Komentar</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="komentar" placeholder="Berikan Komentar">
                  </div>
                </div>

                <?= $this->session->flashdata('message')?>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('user')?>"><button type="button" class="btn btn-default">Kembali</button></a>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
