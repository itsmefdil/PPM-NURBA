<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img height="50px" src="<?= base_url('uploads/images/')?><?= $s['favicon']?>" alt=""><?= $s['nama']?></a></div>
							</div>
							<p class="footer_about_text"><?= $s['tentang']?></p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="<?= $sosmed['facebook']?>"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="<?= $sosmed['instagram']?>"><i class="fa fa-instagram"></i></a></li>
								<li class="footer_social_item"><a href="mailto:<?= $sosmed['email']?>"><i class="fa fa-google"></i></a></li>
								<li class="footer_social_item"><a href="<?= $sosmed['youtube']?>"><i class="fa fa-youtube"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							<?php foreach($bf->result() as $b){?>
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?= base_url('uploads/blog/'.$b->foto) ?>" alt="Thumbnail"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="<?= base_url('baca/')?><?= $b->slug?>"><?= $b->judul?></a></div>
									<div class="footer_blog_date"><?= $b->kategori?></div>
								</div>
							</div>
						<?php }?>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Kategori</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<?php foreach($k->result() as $k){?>
								<li class="tag_item"><a href="<?= base_url('kategori/')?><?= $k->nama?>"><?= $k->nama?></a></li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Kontak</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text"><?= $kontak['alamat']?></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text"><?= $kontak['nomer']?></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:<?= $kontak['email']?>" target="_top"><?= $kontak['email']?></a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('assets/')?>images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="<?= base_url()?>"><?= base_url()?></a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?= base_url()?>  
</div>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<!-- <li class="footer_nav_item"><a href="#">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="contact.html">contact</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?= base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/')?>styles/bootstrap4/popper.js"></script>
<script src="<?= base_url('assets/')?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('assets/')?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/')?>js/custom.js"></script>
<script src="<?= base_url('assets/')?>plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?= base_url('assets/')?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('assets/')?>js/blog_custom.js"></script>


</body>

</html>