 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bulan</h3>
            </div>
            <form action="<?= base_url('bulan/search')?>" method="get" id="form">
            <input type="text" name="cari" placeholder="Search Bulan" >
            <input type="submit"  value="Cari" class="btn btn-success btn-md">
            <a href="<?= base_url('bulan/tambah') ?>" class="btn btn-small btn-primary pull-right">Tambah</a>
          </form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                  <?php
                  if (! empty($record)):
                  ?>
                  <?php
                  $no = $this->uri->segment('3') + 1;
                  foreach ($record as $row) {
                  ?>
                  <tr>
                  <td><?php echo $no++; ?></td>
                   <td><?php echo $row->nama_bulan; ?></td>
                  <td><?php echo $row->tahun; ?></td>
                  <td><a href="<?= base_url('bulan/ubah/'.$row->id); ?>" class="btn btn-small btn-warning" ><i class="fa fa-pencil-square-o"></i></a></td>
                  <td><a href="<?= base_url('bulan/proses_hapus/'.$row->id); ?>" class="btn btn-small btn-danger" onclick="return confirm ('Hapus Data ???')"><i class="fa fa-trash"></i></a></td>
                </tr>
                  <?php }?>
                <?php else: ?>
                  <td colspan="10">Data Tidak Ada</td>
                <?php endif;?>
              </table>
              <?php
              if (isset($links)) {
                echo $links;
              }
              ?>
            </div>
            </div>
          </div>
          </div>
          <style media="screen">
            #form{
              margin-left: 8px;
            }
          </style>
          <!-- /.box -->
