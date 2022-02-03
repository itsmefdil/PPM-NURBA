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
      <div class="col-sm-12">
      	<div align="right"><a href="<?= base_url('admin/blog')?>" class="btn btn-primary" >Kembali</a></div><br>
      	<div class="box box-primary">
      		<div class="box-header">
      			<div class="box-title">Tambah Artikel</div>
      		</div>
      		<div class="box-body">
					<form action="<?= base_url()?>admin/blog/store" method="post" enctype="multipart/form-data">
      				<div class="form-group">
      					<label for="">Judul</label>
      					<input type="text" name="judul" class="form-control" required="">
      				</div>
      				<div class="form-group">
      					<label for="">Foto</label>
      					<input type="file" name="foto" class="form-control" >
      				</div>
      				<div class="form-group">
      					<label for="">Kategori</label>
      					<select name="kategori" id="editor" class="form-control">
                  <?php foreach($k->result() as $k){?>
      						<option value="<?= $k->nama?>"><?= $k->nama?></option>
                <?php }?>
      					</select>
      				</div>
      				<div class="form-group">
      					<label for="">Konten</label>
      					<textarea name="konten" id="" cols="30" rows="3" class="form-control"></textarea>
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
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'konten' );
</script>
   <?php 
   $this->load->view('admin/komponen/footer');
   $this->load->view('admin/komponen/js');

   ?>
