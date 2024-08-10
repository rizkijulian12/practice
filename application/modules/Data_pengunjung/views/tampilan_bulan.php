 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Peminjam</h3>
            </div>
            <!-- /.box-header -->
              <section class="content">
                <div class="row">
                <?php 
                  if (isset ($record)):
                ?>
                
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <?php 
                foreach ($record as $row) :
                ?>
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>

                      <p><?php echo $row->nama_bulan; ?> <?php echo $row->tahun; ?></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('data_pengunjung/tampilan/'.$row->nama_bulan.'/'.$row->tahun); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                  <?php 
                  endforeach;
                  ?>
                  <?php 
                    else:
                  ?>
                  Data Kosong
                  <?php
                  endif; 
                  ?>
                </div>
              </section>
              <?php
              if (isset($links)) {
                echo $links;
              }
              ?>
            </div>
            </div>
          </div>
          <style media="screen">
            #form{
              margin-left: 8px;
            }
          </style>
          <!-- /.box -->
