<?php $this->load->view('home/komponen/header');?>
<?php $this->load->view('home/komponen/navbar');?>
<!-- Home -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_responsive.css">
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('uploads/')?>images/bg_galery.jpg"></div>
	<div class="home_content">
		<div class="home_title">GALERY</div>
		<center>
			<a href="<?= base_url('galery')?>" class="btn btn-warning ">Foto</a> 
			<a href="<?= base_url('video')?>" class="btn btn-success">Video</a></center>
	</div>
</div> 
<div class="container">
<div class="gallery_container">
	<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
		<?php foreach($foto->result() as $f){?>
		<li class="gallery_item">
			<a  href="#" data-toggle="modal" data-target="#foto<?= $f->id?>">
				<img src="<?= base_url('uploads/galery/')?><?= $f->file?>" alt="<?= base_url('uploads/galery/')?><?= $f->file?>">
			</a>
		</li>
		<?php }?>
	</ul>
</div>
</div>

<?php foreach($foto->result() as $f){?>

<div id="foto<?= $f->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p>Menampilkan Foto</p>
				<div class="row">
					<div class="col-sm-8">
						<img class="img-thumbnail" width="100%" src="<?= base_url('uploads/galery/')?><?= $f->file?>" alt="">
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<h4 style="color: black"><?= $f->nama ?></h4><hr>
								<p><?= $f->deskripsi ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php $this->load->view('home/komponen/footer');?>