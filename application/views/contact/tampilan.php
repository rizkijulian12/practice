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
                  <th>Email</th>
                  <th>Komentar</th>
                  <th>Delete</th>
                </tr>
                <tr>
                  <?php
                  $no =0;
                  foreach ($record as $row) { 
                  $no++;
                  ?>
                  <td><?php echo $no; ?></td>
                   <td><?php echo $row->email; ?></td>
                  <td><?php echo $row->komentar; ?></td>
                  <td><a href="<?= base_url('contact/proses_hapus/'.$row->id); ?>" class="btn btn-small btn-danger">Hapus</a></td>
                  </tr>
                  <?php }?>
              </table>
            </div>
            </div>
          </div>
          </div>
          <!-- /.box -->
