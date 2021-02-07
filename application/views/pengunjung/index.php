<!DOCTYPE html>
<html>
<head>	
	
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="<?php echo strip_tags($nama); ?>">
  <meta name="description" content="<?php echo strip_tags($tentang); ?>">
  <meta name="author" content="drawiguna@gmail.com">
  <meta name="keywords" content="SMK TARUNA BANGSA CIAMIS">

  <meta property="og:title" content="SMK TARUNA BANGSA CIAMIS" />
  <meta property="og:url" content="<?php echo base_url(""); ?>" />
  <meta property="og:description" content="<?php echo strip_tags($tentang); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/navbar.css"); ?>">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/slider/css/owl.carousel.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/slider/css/slider.css"); ?>">	
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animation.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pengunjung.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugin/animisition/animsition.min.css") ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/bootsnav/css/animate.css') ?>">	
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugin/bootsnav/css/bootsnav.css") ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/admin/media/".strip_tags($logo)); ?>">
  <link rel="shorcut icon" href="<?php echo base_url().'assets/img/logotaruna.png'?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title><?php echo strip_tags($nama); ?></title>

</head>

<body id="page-top" class="animsition">
	
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top bootsnav navbar-white">

   <div class="header-topbar">
    <div class="container">

      <div class="row">
        <div class="col-xs-6 col-sm-8 col-md-9">

          <div class="header-top_address">

            <div class="header-top_list"><span  class="fa fa-phone"></span  >02657291384</div>

            <div class="header-top_list"><span class="fa fa-envelope-o"></span>smk.tarunabangsa_cms@yahoo.com</div>
            <div class="header-top_list"></div>

          </div>

        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="header-top_login mr-sm-3"></div>
        </div>

      </div>

    </div>
  </div>

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#naff">
        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top"  style="color:#ffffff;">					
        <img src="<?php echo base_url("assets/admin/media/".strip_tags($logo)); ?>"  width="180" >&nbsp;  
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="naff">
      <ul class="nav navbar-nav navbar-right">
        <?php foreach ($menu as $key => $value): ?>
          <?php if (empty($value['anak'])): ?>
            <li>
              <a class="active" href="<?php echo $value['url']; ?>"><?php echo $value['nama']; ?></a>
            </li>
          <?php else: ?>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $value['nama']; ?></a>
              <ul class="dropdown-menu">
                <?php foreach ($value['anak'] as $key => $isi): ?>
                  <li><a href="<?php echo base_url("$isi[url]"); ?>"><?php echo $isi['nama']; ?></a></li>
                <?php endforeach ?>
              </ul>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </div>

    <!-- /.navbar-collapse -->
  </div>

  <!-- /.container-fluid -->
</nav>

<!-- slider area -->
<section class="section-ns">

  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
     <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
     <li data-target="#bs-carousel" data-slide-to="1"></li>
     <li data-target="#bs-carousel" data-slide-to="2"></li>
     <li data-target="#bs-carousel" data-slide-to="3"></li>

   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner">

     <div class="item slides active">
      <div class="slide-1" style="background-image: url('<?php echo base_url("assets/img/rapat.jpeg") ?>'); "></div>
      <div class="carousel-caption">
        <hgroup>
          <h1 style="text-align:bold; font-size: 55px; font-weight: bold; font-family: 'Poppins', sans-serif;">Penguatan Nilai Ujian Nasional</h1>        
          <h4>Rapat Penguatan Nilai Ujian Nasional Tahun Ajaran 2019-2020 SMK TARUNA BANGSA CIAMIS</h4>
        </hgroup>
      </div>
    </div>

    <div class="item slides">
      <div  class="slide-2" style="background-image: url('<?php echo base_url("assets/img/guru2.jpeg") ?>');"></div>
      <div class="carousel-caption">
        <hgroup>
          <h1 style="text-align:bold; font-size: 55px; font-weight: bold; font-family: 'Poppins', sans-serif;">GURU</h1>        
          <h4>Tenaga Pendidik Yang Profesional</h4>
        </hgroup>
      </div>
    </div>

    <div class="item slides">
      <div class="slide-3" style="background-image: url('<?php echo base_url("assets/img/polisi.jpg") ?>');"></div>
      <div class="carousel-caption">
        <hgroup>
          <h1 style="text-align:bold; font-size: 55px; font-weight: bold; font-family: 'Poppins', sans-serif;">Sosialisasi</h1>        
          <h4>Mencegah Radikalisme di Lingkungan Sekolah</h4>
        </hgroup>
      </div>
    </div>

    <div class="item slides">
      <div class="slide-3" style="background-image: url('<?php echo base_url("assets/img/upacara.jpg") ?>');"></div>
      <div class="carousel-caption">
        <hgroup>
          <h1 style="text-align:bold; font-size: 55px; font-weight: bold; font-family: 'Poppins', sans-serif;">Upacara Bendera</h1>        
          <h4>Mendidik Kedisiplinan Siswa</h4>
        </hgroup>
      </div>
    </div>

  </div> 
</div>

</section>

<div class="container">
  <div class="row text-center">				
   <div class="section-header">

    <h2 class="section-judul">Berita Terbaru</h2>	
    <hr>
  </div>
  <div class="col-md-8 col-md-offset-2"></div>	
</div>
<div class="section-body">
 <div class="blog-items">

  <?php foreach ($berita as $key => $value): ?>
   <div class="col-md-6 single-item">
    <div class="item">
     <div class="thumb">
      <a href="#"><img src="<?php echo base_url("assets/admin/img/berita/".$value['foto_berita']); ?>" alt="Thumb"></a>
      <div class="date">
       <h4><span><?php echo date("d",strtotime($value['tgl_berita'])) ?></span><?php echo date("M",strtotime($value['tgl_berita'])) ?>, <?php echo date("Y",strtotime($value['tgl_berita'])) ?></h4>
     </div>
   </div>
   <div class="info">
    <h4>
     <a href="<?php echo base_url("berita/detail/".$value['url_berita']); ?>"><?php echo $value['judul_berita']; ?></a>
   </h4>
   <p>
     <?php echo substr(strip_tags($value['isi_berita']),0,225); ?> ...</p> 
     <a href="<?php echo base_url("berita/detail/".$value['url_berita']); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
   </div>
 </div>
</div>
<?php endforeach ?>
</div>
<div class="more-btn col-md-12 text-center">
  <a href="<?php echo base_url("kategori/berita-terbaru"); ?>" class="btn btn-dark border btn-md">Tampilkan Semua Berita</a>
</div>
</div>			
</div>		


<section class="section-grey" id="ekstrakurikuler">
  <div class="container">
   <div class="row text-center">				
    <div class="section-header">

     <h2 class="section-judul">Ekstrakulikuler</h2>	
     <hr>
   </div>

   <div class="col-md-12">
     <div class="row">
      <div class="col-md-3">
       <div class="kotak kotak-primary">
        <div class="row">
         <div class="col-md-12 text-center">
          <h3>IRMA</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
   <div class="kotak kotak-success">
    <div class="row">
     <div class="col-md-12 text-center">
      <h3>PMR</h3>
    </div>
  </div>
</div>
</div>
<div class="col-md-3">
 <div class="kotak kotak-info">
  <div class="row">
   <div class="col-md-12 text-center">
    <h3>SENI</h3>
  </div>
</div>
</div>
</div>
<div class="col-md-3">
 <div class="kotak kotak-danger">
  <div class="row">
   <div class="col-md-12 text-center">
    <h3>PASKIBRA</h3>
  </div>
</div>
</div>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-3">
   <div class="kotak kotak-warning">
    <div class="row">
     <div class="col-md-12 text-center">
      <h3>FUTSAL</h3>
    </div>
  </div>
</div>
</div>

<div class="col-md-3">
 <div class="kotak kotak-danger">
  <div class="row">
   <div class="col-md-12 text-center">
    <h3>VOLI</h3>
  </div>
</div>
</div>
</div>
<div class="col-md-3">
 <div class="kotak kotak-info">
  <div class="row">
   <div class="col-md-12 text-center">
    <h3>PKS</h3>
  </div>
</div>
</div>
</div>
<div class="col-md-3">
 <div class="kotak kotak-warning">
  <div class="row">
   <div class="col-md-12 text-center">
    <h3>PRAMUKA</h3>
  </div>
</div>
</div>
</div>
</div>
</div>	
</div>
</div>

</section>
<section class="section-grey">
  <div class="container">
   <div class="row text-center">				
    <div class="section-header">

     <h2 class="section-judul">GURU <?php echo strip_tags($nama); ?></h2>	
     <hr>
   </div>
   <div class="col-md-8 col-md-offset-2"></div>	
 </div>
 <div class="section-body">
  <div class="owl-carousel guru">

    <?php foreach ($guru as $key => $value): ?>
      <div>
        <div class="kotak kotak-default">
          <img style="height:380px;" src="<?php echo base_url("assets/user/img/guru/$value[foto]"); ?>"  class="img-fluid" alt="footer_logo">
          <div class="kotak kotak-default kotak-desk" >
            <h3 style="text-align:center; "><?php echo $value['nama_guru']; ?></h3>
            <p>Guru <?php echo $value['mata_pelajaran']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>

    <?php foreach ($guru as $key => $value): ?>
      <div>
        <div class="kotak kotak-default">
          <img style="height:380px;" src="<?php echo base_url("assets/user/img/guru/$value[foto]"); ?>" class="img-responsive">
          <div class="kotak kotak-default kotak-desk" >
            <h3 style="text-align:center; "><?php echo $value['nama_guru']; ?></h3>
            <p>Guru <?php echo $value['mata_pelajaran']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>

  </div>
</div>
</div>
</section>

<section id="kontak">
  <div class="container">
   <div class="section-header text-center">
    <h2 class="section-judul">Hubungi Kami</h2>
    <hr>
  </div>
  <div class="row">
    <div class="col-md-6 maps">
     <h3>Denah Lokasi</h3>
     <div class="google-maps">
      <div style="width: 400px;height: 400px;background: red;" id="map">

      </div>
    </div>
  </div>
  <div class="col-md-6 form kontak">
   <div class="heading f-item address">
     <br>
     <br>
     <i class="fa fa-phone"></i>
     <h3>Kontak : 02657291384</h3>
     <br>
     <i class="fa fa-envelope"></i>
     <h3>Email : smk.tarunabangsa_cms@yahoo.com</h3>
     <br>
     <i class="fa fa-map"></i>
     <h3>Alamat : Jl.Raya Banjar-Ciamis Km 3 Dewasari Kec.Cijengjing Kab.Ciamis Jawa Barat  </h3>
   </div>

 </div>
</div>
</div>
</section>

<footer>
  <div class="container" >
    <div class="row" style="height:65px; color: white; text-align: center;">
      <p>
        @Copyright 2019 SMK TARUNA BANGSA CIAMIS all right reserved.
        <br>Website By Indra Wiguna,S.Kom.            
      </p>
    </div>
  </div>
</footer>

<!-- modal -->		
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>	
<script type="text/javascript" src="<?php echo base_url("assets/js/compro.js") ?>"></script>  	
<script type="text/javascript" src="<?php echo base_url("assets/plugin/slider/js/owl.carousel.min.js") ?>"></script>					
<script type="text/javascript" src="<?php echo base_url("assets/js/wow.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/plugin/animisition/animsition.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/plugin/animisition/animsition.main.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/plugin/bootsnav/js/bootsnav.js") ?>"></script>
<script>
 var map;
 var uluru = {lat: <?php echo strip_tags($lat); ?>, lng: <?php echo strip_tags($lng); ?>};
 function initMap() 
 {
  map = new google.maps.Map(document.getElementById('map'), 
  {
   center: {lat: <?php echo strip_tags($lat); ?>, lng: <?php echo strip_tags($lng); ?>},
   zoom: 17
 });
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg-qq-Ul47HDfatiP8o1LwW8Art1d8ERI&callback=initMap"></script>

<script type="text/javascript">
  $(document).ready(function(){
   $('.owl-carousel.guru').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: [
    "<i class='fa fa-angle-left'></i>",
    "<i class='fa fa-angle-right'></i>"
    ],
    dots: false,
    autoplay: false,
    smartSpeed:500,
            // autoplayTimeout:1000,
            // autoplayHoverPause:true
            responsive: {
            	0: {
            		items: 1
            	},
            	600: {
            		items: 2
            	},
            	1000: {
            		items: 3
            	}
            }
          });
 });

</script>



<script>
  var i = 0;
  var txt = 'Assalamualaikum Warahmatullohi Wabarakatuh. Salam sejahtera bagi kita semua, selamat datang di website SMK Taruna Bangsa Ciamis Berdasarkan Keputusan Badan Akreditasi Nasional Sekolah / Madrasah Nomor: 032/BAN-SM/SK/2019, menyatakan bahwa: SMK Taruna Bangsa Ciamis NPSN : 20237887 Terakreditasi A (UNGGUL) dengan Nilai 92. Sebagai media informasi dan komunikasi web SMK Taruna Bangsa Ciamis meningkatkan layanan sekolah kepada peserta didik, orang tua, masyarakat dan stakeholder.Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah.';
  var speed = 50;
  color = white;
  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("demo").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
</script>
</body>
</html>