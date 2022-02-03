<?php $this->load->view('home/komponen/header');?>
<?php $this->load->view('home/komponen/navbar');?>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>styles/blog_responsive.css">
<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('uploads/')?>images/bg_blog.jpg"></div>
		<div class="home_content">
			<div class="home_title">BLOG</div>
		</div>
	</div>
<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->

				<div class="col-lg-9">
					
					<div class="blog_post_container">
						<div class="col-sm-12 row">
							
						<?php foreach($post->result() as $p){?>
						<!-- Blog Post -->
						<div class="col-sm-6" style="margin-top: 20px">
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="<?= base_url('uploads/')?>blog/<?= $p->foto?>" alt="">
								
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href=""><?= $p->createat?></a></li>
									<li class="blog_post_meta_item"><a href=""><?= $p->kategori?></a></li>
									
								</ul>
							</div>
							<div class="blog_post_title"><a href="<?= base_url('baca/'.$p->slug)?>"><?= $p->judul?></a></div>
							<div class="blog_post_text">
								<p><?= substr($p->konten, 0,200)?>.</p>
							</div>
							<div class="blog_post_link"><a href="<?= base_url('baca/'.$p->slug)?>">Baca</a></div>
							<hr>
						</div>
						</div>
						<!-- End post -->
						
						<?php }?>
							
						</div>
						
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

				<div class="col-lg-3 sidebar_col">
					
					<!-- Sidebar Archives -->
					<div class="sidebar_categories">
						<div class="sidebar_title">Kategori</div>
						<div class="sidebar_list">
							<ul>
								<?php foreach($k->result() as $k){?>
								<li><a href="<?= base_url('kategori/')?><?= $k->nama?>"><?= $k->nama?></a></li>
							<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
<?php $this->load->view('home/komponen/footer');?>
	