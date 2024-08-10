<section class="content">
  <div class="row">
    <div class="col-md-12">
      <h3>Data Warung</h3>
      <section class="content">
        <div class="row">
            <?php
            $no =0;
            foreach ($record->result() as $row) {
              $no++;
              ?>
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Nama Warung : <?php echo $row->nama_resto; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-5">
                <img src="<?php echo base_url();?>images/<?=$row->foto_resto ?>" width="200px" height="100px" class="gambar">
              </div>
              <div class="col-md-7">
                <font style="font-size: 17px;font-family: times-new-roman;">
                Pemilik : <?php echo $row->nama_pemilik; ?><br>
                Alamat  : <?php echo $row->alamat_resto; ?><br>
                Telepon : <?php echo $row->telepon; ?>
                </font>
              </div>
              <div class="col-md-12">
                <center><a href="<?= base_url('daftar_menu/tampilan_user/'.$row->id); ?>" class="btn btn-small btn-success" id="tombol">Lihat Menu</a></center>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->
        <?php } ?>
      </div>
    </section>
              <?php
                echo $pagination;
              ?>
            </div>
          </div>
        </section>
          <!-- /.box -->
<style media="screen">
  #tombol{
    margin-top: 13px;
  }
</style>
