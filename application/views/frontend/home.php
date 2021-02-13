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
<h1 data-animation="fadeInLeft" data-delay="0.2s">Pondok Pesantren<br> Mahasiswa <br>Nur Baiturrahman</h1>
<p data-animation="fadeInLeft" data-delay="0.4s">Kuliah sambil nyantri ? In syaa allah bertambah berkah ilmunya.</p>
<a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Daftar</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="services-area">
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



<section class="about-area1 fix pt-10">
<div class="support-wrapper align-items-center">
<div class="left-content1">
<div class="about-icon">
<img src="<?= base_url('assets/frontend/img/icon/about.svg')?>" alt="">
</div>

<div class="section-tittle section-tittle2 mb-55">
<div class="front-text">
<h2 class="">Belajar meningkatkan iman dan taqwa bersama-sama.</h2>
<p>Barangsiapa yang melaksanakan suatu amalan ibadah dengan berjamaah maka allah akan melipatkangandakan pahala baginya.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="<?= base_url('assets/frontend/img/icon/right-icon.svg')?>" alt="">
</div>
<div class="features-caption">
<p>Melatih akidah dan akhlak santri.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="<?= base_url('assets/frontend/img/icon/right-icon.svg')?>" alt="">
</div>
<div class="features-caption">
<p>Mengikuti kajian untuk mengisi nutrisi hati.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="<?= base_url('assets/frontend/img/icon/right-icon.svg')?>" alt="">
</div>
<div class="features-caption">
<p>Berjamaah dalam segala hal.</p>
</div>
</div>
</div>
<div class="right-content1">

<div class="right-img">
<img src="<?= base_url('assets/frontend/img/boy.png')?>" width="200px" alt="">
<div class="video-icon">
<a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=kKlyzP0Qb0A"><i class="fas fa-play"></i></a>
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
<div class="section-top-border">
<div class="row gallery-item">
<?php foreach($foto as $f){?>
<div class="col-md-4">
<a href="<?= base_url('uploads/galery/')?>/<?= $f->file?>" class="img-pop-up">
<div class="single-gallery-image" style="background: url(<?= base_url('uploads/galery/')?>/<?= $f->file?>);"></div>
</a>
</div>
<?php }?>
</div>
</div>




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
<?php foreach($ustadz as $ust) { ?>
<div class="single-cat text-center">
<div class="cat-icon">
<img style=" border-radius: 50%" width="190px" src="<?= base_url('uploads/ustadz/')?><?= $ust->foto?>" alt="">
</div>
<div class="cat-cap">
<h5><a href="#"><?= $ust->nama ?></a></h5>
<p><?= $ust->mengajar ?></p>
</div>
</div>
<?php }?>

</div>
</div>
</section>


<section class="about-area2 fix pb-padding">
<div class="support-wrapper align-items-center">
<div class="right-content2">

<div class="right-img">
<img src="<?= base_url('assets/frontend/img/pengelana.png')?>" alt="">
</div>
</div>
<div class="left-content2">

<div class="section-tittle section-tittle2 mb-20">
<div class="front-text">
<h2 class="">Pondok Pesantren Mahasiswa Nur Biaturrahman.</h2>
<p>Buat masa mahasiswamu lebih banyak ilmu dunia dan akhirat dengan menjadi santri  di Pondok Pesantren Mahasiswa Nur Biaturrahman.</p>
<a href="#" class="btn">Daftar Sekarang</a>
</div>
</div>
</div>
</div>
</section>

</main>

<?php

include 'komponen/footer.php'

?>
