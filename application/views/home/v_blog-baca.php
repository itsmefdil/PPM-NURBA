<?php $this->load->view('home/komponen/header');?>
<?php $this->load->view('home/komponen/navbar');?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_responsive.css">
<!-- Home -->
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('uploads/')?>blog/<?= $post['foto']?>"></div>
	<div class="home_content">
		<div class="home_title" style="width: 1000px;" align="center"><?= $post['judul']?></div>
	</div>
</div>
<!-- Blog -->
<div class="blog">
	<div class="container">
		<div class="row">
			<!-- Blog Content -->
			<div class="col-lg-10">
				
				<div class="blog_post_container">
					<h2></h2>
					<!-- Blog Post -->
					<div class="blog_post">
						<div class="blog_post_image">
							<img src="<?= base_url('uploads/')?>blog/<?= $post['foto']?>" alt="https://unsplash.com/@anniespratt">
							
						</div>
						<div class="blog_post_meta">
							<ul>
								<li class="blog_post_meta_item"><a href=""><?= $post['createat']?></a></li>
								<li class="blog_post_meta_item"><a href=""><?= $post['kategori']?></a></li>
								
							</ul>
						</div>
						<div class="blog_post_title"><a href="#"><?= $post['judul']?></a></div>
						<div class="blog_post_text">
							<p><?= $post['konten']?>.</p>
							<hr>
							<div class="fb-comments" data-href="<?= base_url('baca/'.$post['slug'])?>" data-numposts="5" data-width="100%"></div>
						</div>
						<!-- <div class="blog_post_link"><a href="#">read more</a></div> -->
					</div>
					<!-- End post -->
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0&appId=263587984250471&autoLogAppEvents=1" nonce="70UrnTLS"></script>
				</div>
				<!--
				<div class="blog_navigation">
					<ul>
							<li class="blog_dot active"><div></div>01.</li>
							<li class="blog_dot"><div></div>02.</li>
							<li class="blog_dot"><div></div>03.</li>
					</ul>
				</div> -->
			</div>
			<!-- Blog Sidebar -->
			<div class="col-lg-2 sidebar_col">
				
				
				<!-- Sidebar Archives -->
				<div class="sidebar_categories">
					<div class="sidebar_title">Kategori</div>
					<div class="sidebar_list">
						<ul>
							<?php foreach($k->result() as $k){?>
							<li><a href="#"><?= $k->nama?></a></li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('home/komponen/footer');?>