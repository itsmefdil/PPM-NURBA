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
    <small>Kontak</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tentang</a></li>
      <li class="active">Kontak</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class= "content">
    <div class="row">
      <div class="col-sm-12">
        
        <div class="box box-primary">
          <div class="box-header">
            <div class="box-title">Kontak</div>
          </div>
          <div class="box-body">
            <form action="<?= base_url('admin/kontak/update')?>" method="post" enctype="multipart/form-data">
              <img width="100px" src="<?= base_url('uploads/images/')?><?= $k['file']?>" alt="">
              <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="file" class="form-control">
                <input type="hidden" name="file_old" value="<?= $k['file']?>">
              </div>
              <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="2" class="form-control"><?= $k['alamat']?></textarea>
              </div>
               <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="<?= $k['email']?>" class="form-control" required="">
              </div>
               <div class="form-group">
                <label for="">No Hp</label>
                <input type="text" name="nomer" value="<?= $k['nomer']?>" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">

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
