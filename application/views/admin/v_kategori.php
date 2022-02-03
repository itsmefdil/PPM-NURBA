<?php
$this->load->view('admin/komponen/header');
$this->load->view('admin/komponen/navbar');
$this->load->view('admin/komponen/sidebar');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Blog
    <small>Blogging</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Blog</a></li>
      <li class="active">Artikel</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
		<?= $this->session->flashdata('sukses')?>
          <div class="col-sm-3">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tambah Kategori</h3>
               <p><?= $this->session->flashdata('sukses')?></p>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="<?= base_url('admin/kategori/add/')?>" method="post">
                    <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="10" rows="3" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" value="reset" class="btn btn-secondary">
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Kategori</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($k->result() as $k){?>
                        <tr>
                          <td><?= $no++?></td>
                          <td><?= $k->nama?></td>
                          <td><?= $k->deskripsi?></td>
                          <td><a href="<?= base_url('admin/kategori/delete/')?><?= $k->id?>" onclick="confirm('Anda Ingin Menghapus Kategori Ini ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>
                  
                </div>
              </div>
              </div><!-- /.col -->
              </div><!-- /.row -->
              </section><!-- /.content -->
              </div><!-- /.content-wrapper -->
              <?php
              $this->load->view('admin/komponen/footer');
              $this->load->view('admin/komponen/js');
              ?>
