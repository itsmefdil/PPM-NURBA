<?php $this->load->view('home/komponen/header');?>
<?php $this->load->view('home/komponen/navbar');?>
<!-- Home -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_responsive.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('uploads/')?>images/bg_galery.jpg"></div>
	<div class="home_content">
		<div class="home_title">pengurus <?= $s['nama']?></div>
	</div>
</div>
<div class="container" style="margin-top: 40px; margin-bottom: 40px">
	<div class="row">
		<?php foreach ($p->result() as $p){?>
		<div class="col-sm-6" align="center">
			<div class="card">
				<div class="card-body">
					<div class="col-sm-12"><img class="rounded-circle" width="100px" src="<?= base_url('uploads/pengurus/')?><?= $p->foto?>" alt=""></div>
					<hr>
					<div class="col-sm-12">
						<h3 style="color: black"><?= $p->nama?></h3>
						<h4 style="color: #31124B"><?= $p->jabatan?></h4>
						<button class="btn btn-info"><i class="fa fa-phone"></i> <?= $p->kontak?></button>
						<p style="color:#1B2162"></p>
					</div>
				</div>
			</div>
			
			
		</div>
		<?php }?>
	</div>
</div>
<?php $this->load->view('home/komponen/footer');?>