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
    <small>Sejarah</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tentang</a></li>
      <li class="active">Sejarah</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        
        <div class="box box-primary">
          <div class="box-header">
            <div class="box-title">Sejarah</div>
          </div>
          <div class="box-body">
          <?php echo form_open_multipart('admin/sejarah/add'); ?>
         
              <div class="form-group">
              <img width="200px" class="rounded" src="<?= base_url('uploads/images/')?><?= $s['foto']?>" class="rounded" alt=""> <br>
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control">
                <input type="hidden" name="foto_old" value="<?= $s['foto']?>">
              </div>
              <div class="form-group">
                <label for="">Sejarah</label>
                <textarea name="sejarah" id=""  cols="30" rows="3" class="form-control"><?= $s['sejarah'] ?></textarea>
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
