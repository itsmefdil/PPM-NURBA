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
      <div class="col-sm-12">
      	<div align="right"><a href="<?= base_url('admin/pengguna')?>" class="btn btn-primary" >Kembali</a></div><br>
      	<div class="box box-primary">
      		<div class="box-header">
      			<div class="box-title">Tambah Pengguna</div>
      		</div>
      		<div class="box-body">
      			<form action="<?= base_url('admin/pengguna/update/')?><?= $p['id']?>" method="post" enctype="multipart/form-data">
      				<div class="form-group">
      					<label for="">Nama</label>
      					<input type="text" name="nama" value="<?= $p['nama']?>" class="form-control" required="">
      				</div>
      				<div class="form-group">
      					<label for="">Foto</label>
      					<input type="file" name="foto" class="form-control">
                <input type="hidden" name="foto_old" value="<?= $p['foto']?>">
      				</div>
      				<div class="form-group">
      					<label for="">Email</label>
      					<input name="email" type="text" value="<?= $p['email']?>" class="form-control"></input>
      				</div>
      				<div class="form-group">
      					<label for="">Password</label>
                <input type="password" name="password" value="<?= $p['password']?>" class="form-control" disabled>
                 <a href="#" data-toggle="modal" data-target="#password">Ganti Password</a>
              <div class="form-group">
                <label for="">Role</label>
                <select class="form-control" name="role">
                  <option value="<?= $p['role']?>"><?= $p['role']?> (Saat Ini)</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Staff">Staff</option>
                </select>
              </div>
      				<div class="form-group">
      					<input type="submit" class="btn btn-primary" value="Simpan">
      					<input type="reset" class="btn btn-light" value="Reset">
      				</div>
      			</form>
      		</div>
      	</div>     
      </div>
  </div>

 
  
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
          <form action="<?= base_url('admin/pengguna/password/')?><?= $p['id']?>" method="post" enctype="multipart/form-data">
            <label>Password Baru</label>
            <input type="password" name="password" class="form-control"></input><br>
            <input type="submit" class="btn btn-primary" value="Simpan">
          </form>
        </div>
      </div>
    </div>
  </div>"></div>

</section>
</div>


   <?php 
   $this->load->view('admin/komponen/footer');
   $this->load->view('admin/komponen/js');

   ?>
