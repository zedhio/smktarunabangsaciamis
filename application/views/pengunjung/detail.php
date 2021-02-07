<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="<?php echo $halaman['judul']; ?>">
	<meta name="description" content="">
	<meta name="author" content="antoniusardyyansah@gmail.com">
	<meta name="keywords" content="<?php echo $halaman['judul']; ?>">

	<meta property="og:title" content="<?php echo $halaman['judul']; ?>" />
	<meta property="og:url" content="<?php echo base_url("halaman/".$halaman['url']); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/navbar.css"); ?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/plugin/slider/css/owl.carousel.min.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/plugin/slider/css/slider.css"); ?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animation.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugin/animisition/animsition.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/bootsnav/css/animate.css') ?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugin/bootsnav/css/bootsnav.css") ?>">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/admin/media/".strip_tags($logo)); ?>">
    	<link rel="shorcut icon" href="<?php echo base_url().'assets/img/logotaruna.png'?>">
	<title><?php echo $halaman['judul']; ?> - SMK Taruna Bangsa Ciamis</title>
	
	<style>
	.addthis_inline_share_toolbox_r1ie{margin:30px auto}
.addthis_inline_share_toolbox_r1ie table{margin:0}
	     .header-topbar {
  padding: 10px;
  background: rgb(0, 96, 177); }

.header-top_address {
  color: #d8d8d8;
  font-size: 15px; }
  .header-top_address .header-top_list {
    display: inline-block;
    color:white;
    margin-right: 22px; }
    @media (max-width: 768px) {
      .header-top_address .header-top_list:last-child {
        display: none;
        
         } }
    @media (max-width: 480px) {
      .header-top_address .header-top_list:nth-child(2) {
        display: none; 

        } }
    .header-top_address .header-top_list span {
      color: #cbb58b;
      margin-right: 10px;
      font-size: 14px; 
color:yellow;
    }
  @media (max-width: 768px) {
    .header-top_address {
      display: inline-block; } }

.header-top_login,
.header-top_login2 {
  float: right;
  color: #fff;
  -webkit-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  font-size: 15px; }
  .header-top_login a,
  .header-top_login2 a {
    color: #fff; }
    .header-top_login a:hover, .header-top_login a:focus,
    .header-top_login2 a:hover,
    .header-top_login2 a:focus {
      color: #cbb58b; }

@media (max-width: 574px) {
  .header-top_login {
    display: none; } }

@media (min-width: 574px) {
  .header-top_login2 {
    display: none; } }
    
    
.facebook {
  background: #3B5998;
  color: white;
  text-align: center;
  padding: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 10px;
}


footer {
  background: rgb(7, 60, 100);
  padding: 10px 0 10px; }

.subscribe {
  border-bottom: 1px solid #3f3f3f; }
  .subscribe h3 {
    text-align: center;
    color: #fff;
    padding: 0; }
  .subscribe form {
    text-align: center;
    margin: 20px auto 60px; }
  .subscribe .form-group {
    position: relative; }
  .subscribe .help-block {
    position: absolute;
    text-align: center;
    display: block;
    width: 100%;
    margin: 10px 0; }
  @media (max-width: 767px) {
    .subscribe .btn-warning {
      margin: 0 auto; }
    .subscribe .help-block {
      position: static;
      margin: 0 0 15px; }
    .subscribe #js-subscribe-result .help-block {
      margin: 10px 0 15px; } }

.signup_form {
  font-family: "Lora", serif;
  background: #3f3f3f;
  font-size: 17px;
  border: none;
  padding: 15px 60px 15px 60px;
  border-radius: 3px;
  color: #fff;
  outline: none;
  background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjAxMiAzMS4wMTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjAxMiAzMS4wMTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMjguNTEyLDI2LjUyOUgyLjVjLTEuMzc4LDAtMi41LTEuMTIxLTIuNS0yLjVWNi45ODJjMC0xLjM3OSwxLjEyMi0yLjUsMi41LTIuNWgyNi4wMTJjMS4zNzgsMCwyLjUsMS4xMjEsMi41LDIuNXYxNy4wNDcgICBDMzEuMDEyLDI1LjQwOCwyOS44OSwyNi41MjksMjguNTEyLDI2LjUyOXogTTIuNSw1LjQ4MmMtMC44MjcsMC0xLjUsMC42NzMtMS41LDEuNXYxNy4wNDdjMCwwLjgyNywwLjY3MywxLjUsMS41LDEuNWgyNi4wMTIgICBjMC44MjcsMCwxLjUtMC42NzMsMS41LTEuNVY2Ljk4MmMwLTAuODI3LTAuNjczLTEuNS0xLjUtMS41SDIuNXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0xNS41MDYsMTguMDE4Yy0wLjY2NSwwLTEuMzMtMC4yMjEtMS44MzYtMC42NjJMMC44OTEsNi4yMTljLTAuMjA4LTAuMTgyLTAuMjMtMC40OTctMC4wNDgtMC43MDUgICBjMC4xODItMC4yMSwwLjQ5OC0wLjIzLDAuNzA2LTAuMDQ5bDEyLjc3OCwxMS4xMzdjMC42NCwwLjU1NywxLjcyLDAuNTU2LDIuMzU4LDBMMjkuNDYsNS40NjZjMC4yMDctMC4xODMsMC41MjItMC4xNjIsMC43MDYsMC4wNDkgICBjMC4xODIsMC4yMDgsMC4xNiwwLjUyMy0wLjA0OCwwLjcwNUwxNy4zNDIsMTcuMzU1QzE2LjgzNiwxNy43OTcsMTYuMTcxLDE4LjAxOCwxNS41MDYsMTguMDE4eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=);
  background-repeat: no-repeat;
  background-position: 22px 19px;
  width: 460px;
  margin-right: 15px; }
  @media (max-width: 767px) {
    .signup_form {
      width: 100%;
      margin-right: 0;
      margin-bottom: 15px; } }

.signup_form::-webkit-input-placeholder {
  color: #969696; }

.signup_form::-moz-placeholder {
  color: #969696; }

.signup_form:-ms-input-placeholder {
  color: #969696; }

.signup_form::placeholder {
  color: #969696; }

.btn-warning {
  background: #cbb58b;
  border: none;
  border-radius: 3px;
  padding: 17px 34px;
  font-size: 15px;
  outline: none;
  cursor: pointer;
  font-weight: bold; }

.btn-black.active,
.btn-black:active,
.show > .btn-warning.dropdown-toggle {
  color: #fff;
  background: #cbb58b; }

.btn-warning:hover {
  border: none;
  background: #bfa97f; }

.foot-logo {
  padding: 60px 0 34px; }
  .foot-logo p {
    color: #c4c4c4;
    font-weight: 100;
    padding: 24px 0 0;
    font-size: 17px; }

.tweet {
  color: #c4c4c4; }
  .tweet ul {
    padding-left: 0; }
  .tweet li {
    list-style: none;
    margin-left: 0;
    margin-top: 30px; }
  .tweet a:hover {
    color: #cbb58b;
    text-decoration: underline; }
  .tweet i {
    font-size: 28px;
    color: #cbb58b;
    float: left; }
  .tweet div {
    margin-left: 50px; }

.sitemap ul {
  margin: 0;
  padding: 16px 0 0; }
  .sitemap ul li {
    list-style: none; }
    .sitemap ul li a {
      color: #c4c4c4;
      font-size: 17px;
      line-height: 2; }
    .sitemap ul li :hover {
      color: #cbb58b;
      text-decoration: none;
      -webkit-transition: 0.2s;
      -o-transition: 0.2s;
      transition: 0.2s; }

footer h3 {
  color: #fff;
  padding: 60px 0 0; }

.address p {
  color: #c4c4c4;
  padding: 16px 0 0; }
  .address p span {
    color: #fff; }

.address ul {
  margin: 0;
  padding: 0; }
  .address ul li {
    list-style: none;
    float: left; }
    .address ul li a {
      color: #fff;
      margin-right: 5px; }

.footer-social-icons li {
  margin-right: 5px; }

.fa-fb {
  background: #4b6eb9;
  padding: 14px 18px;
  border-radius: 50%;
  width: 44px;
  height: 44px; }

.fa-fb:hover {
  opacity: 0.8;
  -webkit-transition: 0.2;
  -o-transition: 0.2;
  transition: 0.2; }

.fa-in {
  background: #188bc3;
  padding: 13px 16px;
  border-radius: 50%;
  width: 44px;
  height: 44px; }

.fa-in:hover {
  opacity: 0.8;
  -webkit-transition: 0.2;
  -o-transition: 0.2;
  transition: 0.2; }

.fa-tw {
  background: #55acee;
  padding: 14px 16px;
  border-radius: 50%;
  width: 44px;
  height: 44px; }

.fa-tw:hover {
  opacity: 0.8;
  -webkit-transition: 0.2;
  -o-transition: 0.2;
  transition: 0.2; }
 
 .fa-ig {
  background: #125688;
  padding: 14px 16px;
  border-radius: 50%;
  width: 44px;
  height: 44px; }

.fa-ig:hover {
  opacity: 0.8;
  -webkit-transition: 0.2;
  -o-transition: 0.2;
  transition: 0.2; }

 .fa-yt {
  background:  #dd4b39;
  padding: 14px 16px;
  border-radius: 50%;
  width: 44px;
  height: 44px; }

.fa-yt:hover {
  opacity: 0.8;
  -webkit-transition: 0.2;
  -o-transition: 0.2;
  transition: 0.2; }

@media (max-width: 992px) {
  footer h3 {
    font-size: 18px; }
  .fa-fb {
    width: 44px;
    height: 44px;
    padding: 15px 17px; }
  .fa-in {
    width: 44px;
    height: 44px;
    padding: 14px 16px; }
    .fa-ig {
    
  width: 44px;
    height: 44px;
    padding: 14px 16px;
 }
 .fa-yt {
    
  width: 44px;
    height: 44px;
    padding: 14px 16px;
 }
  .fa-tw {
    width: 44px;
    height: 44px;
    padding: 14px 16px; } }

@media (max-width: 767px) {
  .subscribe form {
    margin: 20px 0 38px; }
  .foot-logo {
    padding: 32px 0 34px; }
    .foot-logo p {
      padding: 11px 0 0; } }

@media (max-width: 480px) {
  .btn-warning {
    width: 100%; }
  .foot-logo {
    padding: 28px 0 0; }
  footer h3 {
    padding: 42px 0 0; } }
    

	    
	    
	</style>
</head>
<body id="page-top" class="animsition">
	
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top bootsnav">
	      <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        
                        <div class="header-top_list">
                            <span  class="fa fa-phone"></span  >02657291384
                        </div>

                        <div class="header-top_list">
                            <span class="fa fa-envelope-o"></span>smk.tarunabangsa_cms@yahoo.com
                        </div>
                        <div class="header-top_list"> 
                           
                        </div>
                    </div>
                   
                </div>
              
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        
                    </div>

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
		.m-t-100{
			margin-top: 100px;
		}
	</style>
	<section class="m-t-100">
		<div class="container">
			<div class="">				
				<div class="section-body">
					<ul class="breadcrumb col-md-10 col-md-offset-1">
						<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><?php echo $halaman['judul']; ?></li>
					</ul>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="blog-items">

								<!-- Single Item -->
								<div class=" single-item">
									<div class="item">
										<div class="thumb">
											<a href="#"><img class="img-responsive" src="<?php echo base_url("assets/admin/img/halaman/".$halaman['gambar']); ?>" alt="Thumb"></a>
											<div class="date">
												<h4><span><?php echo date("d",strtotime($halaman['tanggal'])) ?></span><?php echo date("M",strtotime($halaman['tanggal'])) ?>, <?php echo date("Y",strtotime($halaman['tanggal'])) ?></h4>
											</div>
										</div>
										<div class="info info-detail">
											<h3>
												<?php echo $halaman['judul']; ?>
											</h3>
											<hr>
											<?php echo $halaman['isi']; ?>
  Share On : <div class='addthis_inline_share_toolbox_r1ie'></div>
										</div>
									</div>
								</div>
							</div>
						</div>
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
            <!--<div class="col-md-3">-->
            <!--    <div class="foot-logo">-->
            <!--        <a href="<?php echo site_url();?>">-->
            <!--            <img src="<?php echo base_url().'assets/img/logofooter.png'?>"  class="img-fluid" alt="footer_logo">-->
            <!--        </a>-->
            <!--        <p style=color:white;> © Copyright SMK Taruna Bangsa Ciamis  <a style=color:white; href="" target="_blank"> 2019 by Indra Wiguna   </a> <br> </p>-->
            <!--    </div>-->
            <!--</div>-->
      <!--      <div class="col-md-6 maps">-->
						<!--	<h3>Denah Lokasi</h3>-->
						<!--	<div class="google-maps">-->
						<!--		<div style="width: 100%;height: 300px;background: red;" id="map">-->

						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
            
          <!--<div class="col-md-3">-->
          <!--  <div class="address">-->
          <!--      <h3>Hubungi Kami</h3>-->
          <!--      <p style="color:white;"><span style="color:white;">Alamat: </span>Jl.Raya Banjar Ciamis Km 3 Dewasari, Kec.Cijengjing Kabupaten Ciamis, Jawa Barat 46271</p>-->
          <!--      <p style="color:white;">Email : smk.tarunabangsa_cms@yahoo.com-->
          <!--      <br>-->
          <!--          <br style="color:white;"> Phone : 02657291384</p>-->
          <!--          <ul class="footer-social-icons">-->
          <!--              <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>-->
          <!--              <li><a href="#"><i class="fa fa-instagram fa-ig" aria-hidden="true"></i></a></li>-->
          <!--              <li><a href="#"><i class="fa fa-youtube fa-yt" aria-hidden="true"></i></a></li>-->
                        
          <!--          </ul>-->
          <!--      </div>-->
          <!--  </div>-->
          
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
	<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-587b5c57917a8607" type="text/javascript"></script>
</body>
</html>