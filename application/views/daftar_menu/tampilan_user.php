 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Contact</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Menu</th>
                  <th>Harga Menu</th>
                  <th>Fhoto Menu</th>
                </tr>
                <tr>
                  <?php
                  $no =0;
                  foreach ($record as $row) {
                  $no++;
                  ?>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->nama_menu; ?></td>
                  <td><?php echo $row->harga_menu; ?></td>
                  <td><img src="<?= base_url();?>images_menu/<?php echo $row->foto_menu; ?>" width="200px" height="100px" class="gambar"></td>
                  </tr>
                  <?php }?>
              </table>
            </div>
            </div>
          </div>
          </div>
        </section>
          <!-- /.box -->
