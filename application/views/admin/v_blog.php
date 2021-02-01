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
            <div class="col-xs-12">
              <div align="right"><a href="<?= base_url('admin/blog/add')?>" class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah Artikel</a></div><br>
              <?= $this->session->flashdata('sukses')?>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Artikel</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Thumbnail</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach($blog->result() as $b) {?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><?= $b->judul?></td>
                        <td><?= $b->kategori?></td>
                        <td><img width="50px" src="<?= base_url('uploads/blog/')?><?= $b->foto?>" alt=""></td>
                        <td>
                        <a href="<?= base_url('admin/blog/edit/')?><?= $b->id?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>  
                        <a href="<?= base_url('admin/blog/delete/')?><?= $b->id?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
