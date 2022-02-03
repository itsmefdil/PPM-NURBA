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
    Website
    <small>Slider</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Slider</a></li>
      <li class="active">Foto</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
          <div class="col-sm-3">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tambah Foto</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="<?= base_url('admin/slider/store/')?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" required>
                  </div>
                  <div class="form-group">
                    <label for="">SubJudul</label>
                    <input type="text" class="form-control" name="subjudul" required>
                  </div>
                  <div class="form-group">
                    <label for="">link</label>
                    <input type="text" class="form-control" name="link" required>
                  </div>
                  <div class="form-group">
                    <label for="">Foto</label>
                  <input type="file" name="foto" class="form-control">
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
                  <h3 class="box-title">Data Foto</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Judul</th>
                          <th>Subjudul</th>
                          <th>Link</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php $no=1; foreach($foto->result() as $f){?>
                        <tr>
                          <td><?= $no++?></td>
                          <td><?= $f->judul?></td>
                          <td><?= $f->subjudul?></td>
                          <td><?= $f->link?></td>
                          <td><img width="50px" src="<?= base_url('uploads/slider/')?><?= $f->foto?>" alt=""></td>
                          <td><a href="#edit" data-toggle="modal" data-target="#edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a> | <a href="<?= base_url('admin/slider/delete/')?><?= $f->id?>" onclick="confirm('Apakah anda ingin menghapus foto ini?')"class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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

              <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <p>Edit Slider</p>
                      <div class="row">
                        <div class="col-sm-6">
                        <div class="box">
                          <div class="box-body">
                          <img width="100%" src="<?= base_url('uploads/slider/')?><?= $f->foto?>">
                          </div>
                        </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="box">
                            <div class="box-body">
                              <form action="<?= base_url('admin/slider/update/')?><?= $f->id?>" method="post" enctype="multipart/form-data">
                            <label for="">Judul</label>
                            <input type="text" name="judul" value="<?= $f->judul?>"  class="form-control">
                            <label for="">Subjudul</label>
                            <input type="text" class="form-control" value="<?= $f->subjudul?>" name="subjudul">
                            <label for="">Link</label>
                            <input type="text" class="form-control" value="<?= $f->link?>" name="link">
                            <label for="">Foto</label>
                            <input type="file" name="foto" class="form-control">
                            <input type="hidden" name="foto_old" value="<?= $f->foto?>">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            </form>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $this->load->view('admin/komponen/footer');
              $this->load->view('admin/komponen/js');
              ?>