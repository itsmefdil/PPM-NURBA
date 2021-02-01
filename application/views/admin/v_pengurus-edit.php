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
    Tentang
    <small>pengurus</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tentang</a></li>
      <li class="active">pengurus</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
      	<div align="right"><a href="<?= base_url('admin/pengurus')?>" class="btn btn-primary" >Kembali</a></div><br>
      	<div class="box box-primary">
      		<div class="box-header">
      			<div class="box-title">Edit Artikel</div>
      		</div>
      		<div class="box-body">
      			<form action="<?= base_url('admin/pengurus/update/')?><?= $p['id']?>" method="post" enctype="multipart/form-data">
      				<div class="form-group">
      					<label for="">Nama</label>
      					<input type="text" name="nama" value="<?= $p['nama']?>" class="form-control" required="">
      				</div>
      				<div class="form-group">
      					<label for="">Foto</label>
      					<input type="file" name="foto" class="form-control" >
                <input type="hidden" name="foto_old" value="<?= $p['foto']?>">
      				</div>
      				<div class="form-group">
      					<label for="">Jabatan</label>
      					<input type="text" class="form-control" value="<?= $p['jabatan']?>" name="jabatan" required="">
      				</div>
      				<div class="form-group">
      					<label for="">No Hp</label>
                <input type="text" name="kontak" value="<?= $p['kontak']?>" class="form-control" required="">
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
</section>
</div>


   <?php 
   $this->load->view('admin/komponen/footer');
   $this->load->view('admin/komponen/js');

   ?>
