<!DOCTYPE html>
<html>
<head>	
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="<?php echo $kategori['nama']; ?>">
  <meta name="description" content="">
  <meta name="author" content="antoniusardyyansah@gmail.com">
  <meta name="keywords" content="<?php echo $kategori['nama']; ?>">

  <meta property="og:title" content="<?php echo $kategori['nama']; ?>" />
  <meta property="og:url" content="<?php echo base_url("kategori/".$kategori['url']); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/navbar.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pengunjung.css"); ?>">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/slider/css/owl.carousel.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/plugin/slider/css/slider.css"); ?>">	
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animation.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugin/animisition/animsition.min.css") ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/bootsnav/css/animate.css') ?>">	
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugin/bootsnav/css/bootsnav.css") ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/admin/media/".strip_tags($logo)); ?>">
  <link rel="shorcut icon" href="<?php echo base_url().'assets/img/logotaruna.png'?>">
  <title><?php echo $kategori['nama']; ?> - SMK Taruna Bangsa Ciamis</title>

</head>

<body id="page-top" class="animsition">
	
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top bootsnav">

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
        <a class="navbar-brand page-scroll" href="#page-top"  style="color:#333;">					
          <img src="<?php echo base_url("assets/admin/media/".strip_tags($logo)); ?>" width="180">&nbsp; 
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="naff">
        <ul class="nav navbar-nav navbar-right">
          <?php foreach ($menu as $key => $value): ?>
            <?php if (empty($value['anak'])): ?>
              <li>
                <a class="active" href="<?php echo base_url(); ?><?php echo $value['url']; ?>"><?php echo $value['nama']; ?></a>
              </li>
            <?php else: ?>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $value['nama']; ?></a>
                <ul class="dropdown-menu">
                  <?php foreach ($value['anak'] as $key => $isi): ?>
                    <li><a href="<?php echo $isi['url']; ?>"><?php echo $isi['nama']; ?></a></li>
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

  <style type="text/css">
    .m-t-50
    {
     margin-top: 50px;
    }
  </style>

  <section class="m-t-50">
    <div class="blog-area full-blog left-sidebar full-blog padding-page">
      <div class="container">
        <div class="row">
          <div class="blog-items">
            
            <div class="col-md-12">
              <br>
              <ul class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i> Home</a></li>
                <li class="active"><?php echo $kategori['nama']; ?></li>
              </ul>
            </div>

            <div class="blog-content col-md-8">
              <?php foreach ($berita_kategori as $key => $value): ?>
                <div class="single-item">
                  <div class="item">
                    <div class="thumb">
                      <a href="#">
                        <img src="<?php echo base_url("assets/admin/img/berita/".$value['foto_berita']); ?>" alt="Thumb">
                      </a>
                      <div class="date">
                        <h4><span><?php echo date("d",strtotime($value['tgl_berita'])) ?></span><?php echo date("M",strtotime($value['tgl_berita'])) ?>, <?php echo date("Y",strtotime($value['tgl_berita'])) ?></h4>
                      </div>
                    </div>
                    <div class="info">
                      <h3><a href="<?php echo base_url("berita/detail/".$value['url_berita']); ?>"><?php echo $value['judul_berita']; ?></a></h3>
                      <p><?php echo substr(strip_tags($value['isi_berita']),0,225); ?> ...</p> 
                      <a href="<?php echo base_url("berita/detail/".$value['url_berita']); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>

            <!-- Start Sidebar -->
            <div class="sidebar col-md-4">
              
              <aside>
               
                <!-- Start Sidebar Item -->
                <div class="sidebar-item search">
                  <div class="title">
                    <h4>Search</h4>
                  </div>
                  <div class="sidebar-info">
                    <form action="" method="POST" target="_top">
                      <input type="text" class="form-control" name="kunci">
                      <input type="submit" value="search">
                    </form>
                  </div>
                </div>
                <!-- End Sidebar Item -->

                <!-- Start Sidebar Item -->
                <div class="sidebar-item category">
                  <div class="title">
                    <h4>Category</h4>
                  </div>
                  <div class="sidebar-info">
                    <ul>
                      <?php foreach ($datakategori as $key => $value): ?>
                      <li>
                        <a href="<?php echo base_url("kategori/".$value['url']); ?>" target="_top"><?php echo $value['nama']; ?></a>
                      </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>

              </aside>
            
            </div>
            <!-- End Start Sidebar -->

          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container" >
      <div class="row" style="height:65px; color: white;
      text-align: center;">
      <p>@Copyright 2019 SMK TARUNA BANGSA CIAMIS all right reserved.
        <br>
        Website By Indra Wiguna.            
      </p>
    </div>
  </div>
  </footer>

  <!-- modal -->		
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>	
  <script type="text/javascript" src="<?php echo base_url("assets/js/compro.js") ?>"></script>			
  <script type="text/javascript" src="<?php echo base_url("assets/js/wow.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/plugin/animisition/animsition.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/plugin/animisition/animsition.main.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/plugin/bootsnav/js/bootsnav.js") ?>"></script>

  <script>
   var map;
   var uluru = {lat: <?php echo strip_tags($lat); ?>, lng: <?php echo strip_tags($lng); ?>};
   function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: <?php echo strip_tags($lat); ?>, lng: <?php echo strip_tags($lng); ?>},
     zoom: 17
   });

    var marker = new google.maps.Marker({position: uluru, map: map});
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg-qq-Ul47HDfatiP8o1LwW8Art1d8ERI&callback=initMap"></script>

  </body>
</html>