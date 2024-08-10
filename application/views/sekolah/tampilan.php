<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Table Sekolah</h3>
            </div>
            <a href="<?= base_url('sekolah/tambah') ?>" class="btn btn-small btn-success">Tambah</a>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                <tr>
                 <?php 
                  $no = 1;
                 foreach ($record as $row) { 
                  ?>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->telepon; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><a href="<?= base_url('sekolah/ubah/'.$row->id) ?>" class="btn btn-small btn-warning">Edit</a> | <a href="<?= base_url('sekolah/proses_hapus/'.$row->id) ?>" class="btn btn-small btn-danger">Hapus</a></td></tr>
                 <?php } ?>
                 
              </table>
            </div>
          </div>
        </div>
      </div>