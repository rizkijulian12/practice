<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Warung</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('restoran/proses_ubah/'.$record->id) ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_resto" id="id_resto" value="<?= $this->uri->segment(3)?>">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pemilik</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Masukkan Nama Pemilik" value="<?= $record->nama_pemilik; ?>">
                  </div>
                </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Warung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_warung" name="nama_warung" placeholder="Masukkan Nama Warung" value="<?= $record->nama_resto; ?>">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Warung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat_warung" name="alamat_warung" placeholder="Alamat Warung" value="<?= $record->alamat_resto; ?>">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Fhoto Warung</label>

                  <div class="col-sm-10">
                    <input type="file" id="foto_warung" name="file" value="<?= $record->foto_resto; ?>">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tlp Warung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tlp_warung" name="tlp_warung" placeholder="Masukkan Tlp Warung" value="<?= $record->telepon; ?>">
                    <input type="text" name="id" value="<?= $record->id ?>" >
                  </div>
                  </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('restoran')?>"><button type="button" class="btn btn-default">Cancel</button></a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-check"></i></button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
