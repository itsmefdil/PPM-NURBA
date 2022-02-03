<?php $this->load->view('home/komponen/header');?>
<?php $this->load->view('home/komponen/navbar');?>
<!-- Home -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_responsive.css">
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('uploads/')?>images/bg_galery.jpg"></div>
	<div class="home_content">
		<div class="home_title">KONTAK</div>
	</div>
</div> 
<div class="container" style="margin-top: 40px; margin-bottom: 40px">
<div class="row">

<div class="col-sm-7">

<div>
	<?= $s['peta']?>
</div>
</div>

<div class="col-sm-5">
	<h2 style="color :black">KONTAK <?= $s['nama']?></h2><hr>
	<ul class="contact_info_list" style="color: black">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text"  style="color: black"><?= $kontak['alamat']?></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text"  style="color: black" ><?= $kontak['nomer']?></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:<?= $kontak['email']?>" target="_top"  style="color: black"><?= $kontak['email']?></a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"  style="color: black"><a  style="color: black" href="<?= base_url()?>"><?= base_url()?></a></div>
								</li>
							</ul>
</div>

</div>
</div>


<?php $this->load->view('home/komponen/footer');?>