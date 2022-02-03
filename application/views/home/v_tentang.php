<?php $this->load->view('home/komponen/header');?>
<?php $this->load->view('home/komponen/navbar');?>
<!-- Home -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_responsive.css">
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('uploads/')?>images/bg_galery.jpg"></div>
	<div class="home_content">
		<div class="home_title">tentang kami</div>
	</div>
</div> 
<div class="container" style="margin-top: 40px; margin-bottom: 40px">
<div class="row">

<div class="col-sm-6">
	<img width="100%" src="<?= base_url('uploads/images/')?><?= $sjr['foto']?>?>" alt="">
</div>

<div class="col-sm-6">
	<h2 style="color :black">Sejarah <?= $s['nama']?></h2><hr>
	<p><?= $sjr['sejarah']?></p>
</div>

</div>
</div>


<?php $this->load->view('home/komponen/footer');?>