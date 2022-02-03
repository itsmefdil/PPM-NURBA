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
            Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="active">User profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?= base_url('uploads/pengguna/'.$p['foto'])?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?= $p['nama'] ?></h3>
                  <p class="text-muted text-center"><?= $p['role'] ?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Nama</b> <a class="pull-right"><?= $p['nama'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Status</b> <a class="pull-right">Online</a>
                    </li>
                    <li class="list-group-item">
                      <b>Role</b> <a class="pull-right"><?= $p['role'] ?></a>
                    </li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
            <div class="col-md-9">
            <div class="box box-primary">
              <div class="box-header">
                <div class="box-title">Setting Profile</div>
              </div>
              <div class="box-body">
                <?= $this->session->flashdata('sukses')?>
                <div class="col-sm-12">
                    <form action="<?= base_url('admin/profile/update')?>" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                       <label for="">Nama</label>
                       <input type="text" class="form-control" name="nama" value="<?= $p['nama'] ?>" required="">
                     </div> 
                     <div class="form-group">
                       <label for="">Email</label>
                       <input type="email" class="form-control" name="email" value="<?= $p['email'] ?>" required="">
                     </div> 
                     <div class="form-group">
                       <label for="">Foto</label>
                       <input type="file" class="form-control" name="foto" value="<?= $p['foto'] ?>" >
                       <input type="hidden" class="form-control" name="foto_old" value="<?= $p['foto'] ?>" >
                     </div> 
                     <div class="form-group">
                       <label for="">Password</label>
                       <input type="password" class="form-control" value="<?= $p['password'] ?>" disabled>
                       <small><a href="#" data-toggle="modal" data-target="#password">Ganti Password</a></small>
                     </div> 
                    

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
              </div>
            </div>
           
                  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


  <!-- Modal -->
  <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ganti Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('admin/profile/password/')?>" method="post">
            <label>Password Baru</label>
            <input type="password" name="password" class="form-control"></input><br>
            <input type="submit" class="btn btn-primary" value="Simpan">
          </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
  </div>"></div>
 <?php
$this->load->view('admin/komponen/footer');
$this->load->view('admin/komponen/js');
 ?>