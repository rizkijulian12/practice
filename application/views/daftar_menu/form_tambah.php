<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('daftar_menu/proses_tambah')?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_resto" id="id_resto" value="<?= $this->uri->segment(3)?>">
              <div class="box-body">

                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama Menu</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Masukkan Nama Menu">
                  </div>
                </div>

               <div class="form-group">
                  <label for="exampleFileInput" class="col-sm-2 control-label">Gambar Menu</label>

                  <div class="col-sm-10">
                    <input type="file" id="gambar_menu" name="file">
                  </div>
                  </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" id="angka3">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('restoran')?>"><button type="button" class="btn btn-default">Cancel</button></a>
                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-plus-square"></i></button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <script type="text/javascript" src="libs/jquery.latest.js"></script>
        <script type="text/javascript" src="<?= base_url()?>js/jquery.maskMoney.min.js"></script>
        <script type="text/javascript">
      		$(document).ready(function(){
      			$('#angka1').maskMoney();
      			$('#angka2').maskMoney({prefix:'US$'});
      			$('#angka3').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
      			$('#angka4').maskMoney();
      		});
        </script>
