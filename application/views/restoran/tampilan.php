 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Warung</h3>
            </div>
            <form action="<?= base_url('restoran/search')?>" method="post" class="col-md-6">
              <label>Cari</label>&nbsp;
              <input type="text" name="keyword" placeholder="Cari Nama Warung" >
              <input type="submit" name="search_submit" value="Cari" class="btn btn-success btn-md">
            </form>
            <a href="<?= base_url('restoran/tambah') ?>" class="btn btn-small btn-primary" class="col-md-6" id="kanan">Tambah Warung</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- /.box-header -->
            <div class="box-body">
              <?= $this->session->flashdata('message'); ?>
              <table class="table table-responsive">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Pemilik</th>
                  <th>Nama Warung Makan</th>
                  <th>Alamat Warung Makan</th>
                  <th>Fhoto Warung Makan</th>
                  <th>Telepon</th>
                  <th>Tambahkan Menu</th>
                  <th>Lihat Menu</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                <tr>
                  <?php
                  if (! empty($record->result())):
                  ?>
                  <?php
                  $no =$this->uri->segment('3') + 1;
                  foreach ($record->result() as $row):
                  ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nama_pemilik; ?></td>
                    <td><?php echo $row->nama_resto; ?></td>
                    <td><?php echo $row->alamat_resto; ?></td>
                    <td><img src="<?php echo base_url();?>images/<?=$row->foto_resto ?>" width="200px" height="100px" class="gambar"></td>
                    <td><?php echo $row->telepon; ?></td>
                    <td><a href="<?= base_url('daftar_menu/tambah/'.$row->id); ?>" class="btn btn-small btn-success"><i class="fa fa-plus"></i></a></td>
                    <td><a href="<?= base_url('daftar_menu/tampilan/'.$row->id); ?>" class="btn btn-small btn-success" >Lihat Menu</a></td>
                    <td><a href="<?= base_url('restoran/ubah/'.$row->id); ?>" class="btn btn-small btn-warning" ><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a href="<?= base_url('restoran/proses_hapus/'.$row->id); ?>" class="btn btn-small btn-danger" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  <?php endforeach;?>
                <?php else: ?>
                  <tr>
                    <td colspan="10">Data Tidak Ada</td>
                  </tr>
                <?php endif; ?>  
                  </table>

                <?php
                  echo $pagination;
                ?>

            </div>
            </div>
          </div>
          </div>
          <!-- /.box -->
<style>
#kanan{
  margin-left: 470px;
}
</style>
