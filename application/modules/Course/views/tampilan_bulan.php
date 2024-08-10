<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Peminjam</h3>
            </div>
            <form action="<?= base_url('Course/search')?>" method="get" id="form">
            <input type="text" name="cari" placeholder="" >
            <input type="hidden" name="bulan" value="<?php echo $this->uri->segment(3)?>">
            <input type="hidden" name="tahun" value="<?php echo $this->uri->segment(4)?>">
            <input type="submit"  value="Cari" class="btn btn-success btn-md">
            <a href="<?= base_url('Course/tambah/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" class="btn btn-small btn-primary pull-right">Tambah</a>
          </form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Durasi</th>
                  <th>Materi</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                  <?php
                  if (! empty($record)):
                  ?>
                  <?php
                  $no = 1;
                  foreach ($record as $row) {
                  ?>
                  <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row->judul; ?></td>
                  <td><?php echo $row->deskripsi; ?></td>
                  <td><?php echo $row->durasi; ?></td>
                  <td><a href="<?= base_url('Course/tampilan/'.$row->id); ?>" class="btn btn-small btn-primary" ><i>Lihat Materi</i></a></td>
                  <td><a href="<?= base_url('Course/ubah/'.$row->id); ?>" class="btn btn-small btn-warning" ><i class="fa fa-pencil-square-o"></i></a></td>
                  <td><a href="<?= base_url('Course/proses_hapus/'.$row->id); ?>" class="btn btn-small btn-danger" onclick="return confirm ('Hapus Data ???')"><i class="fa fa-trash"></i></a></td>
                </tr>
                  <?php }?>
                <?php else: ?>
                  <td colspan="11">Data Tidak Ada</td>
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
