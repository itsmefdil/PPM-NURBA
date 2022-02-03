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
    <small>sosmed</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Website</a></li>
      <li class="active">sosmed</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        
        <div class="box box-primary">
          <div class="box-header">
            <div class="box-title">Sosmed</div>
            <p></p><small>Diisi dengan link . contoh : https://facebook.com/facebook</small>
          </div>
          <div class="box-body">
            <form action="<?= base_url('admin/sosmed/update')?>" method="post">
               <div class="form-group">
                <label for="">Facebook</label>
                <input type="text" name="facebook" value="<?= $sosmed['facebook']?>" class="form-control" required="">
              </div>
               <div class="form-group">
                <label for="">Instagram</label>
                <input type="text" name="instagram" value="<?= $sosmed['instagram']?>" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="">Email <small>(Masukan email saja tanpa link)</small></label>
                <input type="text" name="email" value="<?= $sosmed['email']?>" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="">Youtube</label>
                <input type="text" name="youtube" value="<?= $sosmed['youtube']?>" class="form-control" required="">
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
