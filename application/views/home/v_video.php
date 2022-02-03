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
			<?php foreach($video->result() as $f){?>
			<li class="gallery_item">
				<a  href="#" data-toggle="modal" data-target="#foto<?= $f->id?>">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="https://www.brandeps.com/icon-download/V/Video-clip-icon-vector-01.svg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><?= $f->nama?></h5>
							<p class="card-text"><?= $f->deskripsi?>.</p>
							
						</div>
					</div>
				</a>
			</li>
			<?php }?>
		</ul>
	</div>
</div>
<?php foreach($video->result() as $f){?>
<div id="foto<?= $f->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p>Menampilkan Video <?= $f->nama?></p>
				<div class="row">
					 <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
					 <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
					<div class="col-sm-12" align="center">
						<video
							id="my-video"
							class="video-js"
							controls
							preload="auto"
							width="300"
							height="300"
							poster="https://www.brandeps.com/icon-download/V/Video-clip-icon-vector-01.svg"
							data-setup="{}"
							>
							<source src="<?= base_url('uploads/galery/')?><?= $f->file?>" type="video/mp4" />
							<source src="<?= base_url('uploads/galery/')?><?= $f->file?>" type="video/webm" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank"
								>supports HTML5 video</a
								>
							</p>
						</video>
						<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php $this->load->view('home/komponen/footer');?>