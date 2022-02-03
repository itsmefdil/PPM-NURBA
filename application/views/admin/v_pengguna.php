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
            <small>pengguna</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Website</a></li>
            <li class="active">pengguna</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div align="right"><a href="<?= base_url('admin/pengguna/add')?>" class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah Pengguna</a></div><br>
              <div class="box">
                <?= $this->session->flashdata('sukses')?>
                <div class="box-header">
                  <h3 class="box-title">Data Pengguna</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach ($p->result() as $p) { ?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->email ?></td>
                        <td><?= $p->role ?></td>
                        <td><img width="20px" src="<?= base_url('uploads/pengguna/')?><?= $p->foto?>" alt=""></td>
                        <td>
                          <a href="pengguna/edit/<?= $p->id?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a> | 
                          <a href="pengguna/delete/<?= $p->id?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php }?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

   <?php 
   $this->load->view('admin/komponen/footer');
   $this->load->view('admin/komponen/js');

   ?>
