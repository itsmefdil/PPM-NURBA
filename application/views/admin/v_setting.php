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
    <small>setting</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Website</a></li>
      <li class="active">setting</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        
        <div class="box box-primary">
          <div class="box-header">
            <div class="box-title">Setting Web</div>
          </div>
          <div class="box-body">
            <form action="<?= base_url('admin/setting/update')?>" method="post" enctype="multipart/form-data">
              <img class="text-center"  width="200px" src="<?= base_url('uploads/images/')?><?= $s['favicon']?>" alt="">
              <div class="form-group">
                <label for="">Favicon</label>
                <input type="file" name="favicon" class="form-control" >
                <input type="hidden" name="fav_old" value="<?= $s['favicon']?>">
              </div>
              <div class="form-group">
                <label for="">Nama Web</label>
                <input type="text" name="nama" value="<?= $s['nama']?>" class="form-control">
              </div>
               <div class="form-group">
                <label for="">Tentang Web</label>
                <input type="text" class="form-control" name="tentang" value="<?= $s['tentang']?>" required="">
              </div>
               <div class="form-group">
                <label for="">Peta (iframe)</label>
                <textarea class="form-control" name="peta" rows="5"><?= $s['peta']?></textarea>
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
