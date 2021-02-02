<?php

include 'komponen/header.php';
include 'komponen/navbar.php';

?>
<main>

<section class="slider-area " >
<div class="slider-active" >

<div class="single-slider slider-height d-flex align-items-center" >
<div class="container" >
<div class="row">
<div class="col-xl-6 col-lg-7 col-md-12">
<div class="hero__caption">
<h1 data-animation="fadeInLeft" data-delay="0.2s">Pondok Pesantren<br> Mahasiswa <br>Nur Baiturrahman <br>Yogyakarta</h1>
<p data-animation="fadeInLeft" data-delay="0.4s">Kuliah sambil nyantri ? In syaa allah bertambah berkah ilmunya.</p>
<a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Daftar</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="services-area" style="margin-top: 50px;">
<div class="container">
<div class="row justify-content-sm-center">

<?php $no=1; foreach($pelajaran->result() as $p){?>
    <div class="col-lg-4 col-md-6 col-sm-8">
      <div class="single-services mb-30">
      <div class="features-icon">
      <img src="<?= base_url('uploads/pelajaran/')?><?= $p->icon?>" alt="" width="60px">
      </div>
      <div class="features-caption">
      <h3><?= $p->nama ?></h3>
      <p><?= $p->deskripsi ?></p>
      </div>
      </div>
      </div>
<?php }  ?>

</div>
</div>
</div>

<div class="courses-area section-padding40 fix">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">
 <h2>Artikel Terbaru</h2>
</div>
</div>
</div>
<div class="courses-actives">

<div class="properties pb-20">
<div class="properties__card">
<div class="properties__img overlay1">
<a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
</div>
<div class="properties__caption">
<p>User Experience</p>
<h3><a href="#">Fundamental of UX for Application design</a></h3>
<p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
</p>
<div class="properties__footer d-flex justify-content-between align-items-center">
<div class="restaurant-name">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half"></i>
</div>
<p><span>(4.5)</span> based on 120</p>
</div>
<div class="price">
<span>$135</span>
</div>
</div>
<a href="#" class="border-btn border-btn2">Find out more</a>
</div>
</div>
</div>


<div class="properties pb-20">
<div class="properties__card">
<div class="properties__img overlay1">
<a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
</div>
<div class="properties__caption">
<p>User Experience</p>
<h3><a href="#">Fundamental of UX for Application design</a></h3>
<p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
</p>
<div class="properties__footer d-flex justify-content-between align-items-center">
<div class="restaurant-name">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half"></i>
</div>
<p><span>(4.5)</span> based on 120</p>
</div>
<div class="price">
<span>$135</span>
</div>
</div>
<a href="#" class="border-btn border-btn2">Find out more</a>
</div>
</div>
</div>


<div class="properties pb-20">
<div class="properties__card">
<div class="properties__img overlay1">
<a href="#"><img src="assets/img/gallery/featured3.png" alt=""></a>
</div>
<div class="properties__caption">
<p>User Experience</p>
<h3><a href="#">Fundamental of UX for Application design</a></h3>
<p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
</p>
<div class="properties__footer d-flex justify-content-between align-items-center">
<div class="restaurant-name">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half"></i>
</div>
<p><span>(4.5)</span> based on 120</p>
</div>
<div class="price">
<span>$135</span>
</div>
</div>
<a href="#" class="border-btn border-btn2">Find out more</a>
</div>
</div>
</div>


<div class="properties pb-20">
<div class="properties__card">
<div class="properties__img overlay1">
<a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
</div>
<div class="properties__caption">
<p>User Experience</p>
<h3><a href="#">Fundamental of UX for Application design</a></h3>
<p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
</p>
<div class="properties__footer d-flex justify-content-between align-items-center">
<div class="restaurant-name">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half"></i>
</div>
<p><span>(4.5)</span> based on 120</p>
</div>
<div class="price">
<span>$135</span>
</div>
</div>
<a href="#" class="border-btn border-btn2">Find out more</a>
</div>
</div>
</div>

</div>
</div>
</div>


<section class="about-area1 fix pt-10">
<div class="support-wrapper align-items-center">
<div class="left-content1">
<div class="about-icon">
<img src="assets/img/icon/about.svg" alt="">
</div>

<div class="section-tittle section-tittle2 mb-55">
<div class="front-text">
<h2 class="">Belajar meningkatkan iman dan taqwa bersama-sama.</h2>
<p>Barangsiapa yang melaksanakan suatu amalan ibadah dengan berjamaah maka allah akan melipatkangandakan pahala baginya.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt="">
</div>
<div class="features-caption">
<p>Melatih akidah dan akhlak santri.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt="">
</div>
<div class="features-caption">
<p>Mengikuti kajian untuk mengisi nutrisi hati.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt="">
</div>
<div class="features-caption">
<p>Berjamaah dalam segala hal.</p>
</div>
</div>
</div>
<div class="right-content1">

<div class="right-img">
<img src="assets/img/gallery/about.html" alt="">
<div class="video-icon">
<a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
</div>
</div>
</div>
</div>
</section>


<div class="topic-area section-padding40">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">
<h2>Galery</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic1.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic2.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic3.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic4.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic5.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic6.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic7.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="single-topic text-center mb-30">
<div class="topic-img">
<img src="assets/img/gallery/topic8.png" alt="">
<div class="topic-content-box">
<div class="topic-content">
<h3><a href="#">Programing</a></h3>
</div>
</div>
 </div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-xl-12">
<div class="section-tittle text-center mt-20">
<a href="courses.html" class="border-btn">View More Subjects</a>
</div>
</div>
</div>
</div>
</div>


<section class="about-area3 fix">
<div class="support-wrapper align-items-center">
<div class="right-content3">

<div class="right-img">
<img src="assets/img/gallery/about3.png" alt="">
</div>
</div>
<div class="left-content3">

<div class="section-tittle section-tittle2 mb-20">
<div class="front-text">
<h2 class="">Learner outcomes on courses you will take</h2>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt="">
</div>
<div class="features-caption">
<p>Techniques to engage effectively with vulnerable children and young people.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt="">
</div>
<div class="features-caption">
<p>Join millions of people from around the world
learning together.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt="">
</div>
<div class="features-caption">
<p>Join millions of people from around the world learning together.
Online learning is as easy and natural.</p>
</div>
</div>
</div>
</div>
</section>


<section class="team-area section-padding40 fix">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">
<h2>Ustadz Pengajar</h2>
</div>
</div>
</div>
<div class="team-active">
<div class="single-cat text-center">
<div class="cat-icon">
<img src="assets/img/gallery/team1.png" alt="">
</div>
<div class="cat-cap">
<h5><a href="services.html">Mr. Urela</a></h5>
<p>The automated process all your website tasks.</p>
</div>
</div>
<div class="single-cat text-center">
<div class="cat-icon">
<img src="assets/img/gallery/team2.png" alt="">
</div>
<div class="cat-cap">
<h5><a href="services.html">Mr. Uttom</a></h5>
<p>The automated process all your website tasks.</p>
</div>
</div>
<div class="single-cat text-center">
<div class="cat-icon">
<img src="assets/img/gallery/team3.png" alt="">
</div>
<div class="cat-cap">
<h5><a href="services.html">Mr. Shakil</a></h5>
<p>The automated process all your website tasks.</p>
</div>
</div>
<div class="single-cat text-center">
<div class="cat-icon">
<img src="assets/img/gallery/team4.png" alt="">
</div>
<div class="cat-cap">
<h5><a href="services.html">Mr. Arafat</a></h5>
<p>The automated process all your website tasks.</p>
</div>
</div>
<div class="single-cat text-center">
<div class="cat-icon">
<img src="assets/img/gallery/team3.png" alt="">
</div>
<div class="cat-cap">
<h5><a href="services.html">Mr. saiful</a></h5>
<p>The automated process all your website tasks.</p>
</div>
</div>
</div>
</div>
</section>


<section class="about-area2 fix pb-padding">
<div class="support-wrapper align-items-center">
<div class="right-content2">

<div class="right-img">
<img src="assets/img/gallery/about2.png" alt="">
</div>
</div>
<div class="left-content2">

<div class="section-tittle section-tittle2 mb-20">
<div class="front-text">
<h2 class="">Take the next step
toward your personal
and professional goals
with us.</h2>
<p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
<a href="#" class="btn">Join now for Free</a>
</div>
</div>
</div>
</div>
</section>

</main>

<?php

include 'komponen/footer.php'

?>
