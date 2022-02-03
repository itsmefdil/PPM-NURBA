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
            Pengurus
            <small>Data Pengurus</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pengurus</a></li>
            <li class="active">Data Pengurus</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div align="right"><a href="<?= base_url('admin/pengurus/add')?>" class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah Pengurus</a></div><br>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Pengurus</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>No Hp.</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php   $no = 1; foreach ($p->result() as $p){ ?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->jabatan ?></td>
                        <td><?= $p->kontak?></td>
                        <td><img width="40px" src="<?= base_url('uploads/pengurus/')?><?= $p->foto ?>" alt="<?= $p->foto ?>"></td>
                        <td>
                          <a href="<?= base_url('admin/pengurus/edit/') ?><?= $p->id ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a> | 
                          <a href="<?= base_url('admin/pengurus/delete/') ?><?= $p->id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
