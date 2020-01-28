<?php
session_start();
if(!$_SESSION['level'] == 'user'){
    header("location:loginlogout/Login/indexlogin.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="beranda/images/icons/favicon.png"/>
        <title>SI-NISA</title>

        <!-- Bootstrap core CSS -->
        <link href="beranda/css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <!-- Custom styles for this template -->
        <link href="beranda/css/style.css" rel="stylesheet">
        <link href="beranda/fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="beranda/css/lightbox.min.css">
        <link href="beranda/css/responsive.css" rel="stylesheet">
        <script src="beranda/js/jquery.min.js" type="text/javascript"></script>
        <script src="beranda/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="beranda/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="beranda/js/instafeed.min.js" type="text/javascript"></script>
        <script src="beranda/js/custom.js" type="text/javascript"></script>
    </head>

    <body>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="sewaalat/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="sewaalat/css/animate.css">
    
    <link rel="stylesheet" href="sewaalat/css/owl.carousel.min.css">
    <link rel="stylesheet" href="sewaalat/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="sewaalat/css/magnific-popup.css">

    <link rel="stylesheet" href="sewaalat/css/aos.css">

    <link rel="stylesheet" href="sewaalat/css/ionicons.min.css">

    <link rel="stylesheet" href="sewaalat/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="sewaalat/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="sewaalat/css/flaticon.css">
    <link rel="stylesheet" href="sewaalat/css/icomoon.css">
    <link rel="stylesheet" href="sewaalat/css/style.css">
       
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container"> 
            <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                <nav class="navbar-row">
                    <div class="navbar-brand-wrapper d-flex justify-content-center">
                        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                            <a class="navbar-brand brand-logo" href="index.php"></a>
                            <a class="navbar-brand brand-logo-mini" href="index.php"></a>
                        </div>  
                        <img width="250" src="beranda/images/SINISA.png" alt="">
                    </div>
                </nav>
            </div>                 
	      <a class="navbar-brand" href="">BERANDA <span>ADMIN</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="beranda/about.php" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="beranda/contact.php" class="nav-link">Hubungi Kami</a></li>
                
                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel1" data-slide-to="1"></li>
              <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active"> <img src="beranda/images/sawah.jpg" style="width:100%; height: 500px" alt="First slide">
                <div class="carousel-caption">
                  <h1>SI-NISA<br> Solusi Tani Desa</h1>
                </div>
              </div>
              <div class="item"> <img src="beranda/images/sawah4.jpg" style="width:100%; height: 500px" alt="Second slide">
                <div class="carousel-caption">
                  <h1>SI-NISA<br> Solusi Tani Desa</h1>
                </div>
              </div>
              <div class="item"> <img src="beranda/images/alatpertanian.jpg" style="width:100%; height: 500px" alt="Third slide">
                <div class="carousel-caption">
                  <h1>SI-NISA<br> Solusi Tani Desa</h1>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="beranda/images/icons/left-arrow.png" onmouseover="this.src = 'beranda/images/icons/left-arrow-hover.png'" onmouseout="this.src = 'beranda/images/icons/left-arrow.png'" alt="left"></a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="beranda/images/icons/right-arrow.png" onmouseover="this.src = 'beranda/images/icons/right-arrow-hover.png'" onmouseout="this.src = 'beranda/images/icons/right-arrow.png'" alt="left"></a>
        </div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
              <p class="breadcrumbs"><span class="mr-2"><a href="index_admin.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="beranda/about.php">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
              <h1 class="mb-3 bread">PENYULUHAN</h1>
            </div>
          </div>
        </div>

        <!--service block--->
        <section class="ftco-section">
            <section class="service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="beranda/images/icons/presentasi.png" a href="penyuluhan/admin/indexpenyuluhan_admin.php">
                                </div>
                                <h4><a href="penyuluhan/admin/indexpenyuluhan_admin.php">PENYULUHAN</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="beranda/images/icons/tractornew.png" a href="sewaalat/sewa.php">
                                </div>
                                <h4><a href="sewaalat/sewa.php">SEWA ALAT</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang SI-NISA</h2>
              <p>Sebuah aplikasi yang diharapkan dapat membantu kegiatan pertanian dalam menyewa alat pertanian dan penyuluhan yang diisi oleh ahli kepada para petani.</p>
            </div>
          </div>
        
          <div class="col-md"></div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Mempunyai Pertanyaan?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">JL. Semangka No.33 , Kelurahan Baratan, Patrang, Jember, Jawa Timur.</span></li>
	                <li><a><span class="icon icon-phone"></span><span class="text"> (0331) 567234</span></a></li>
	                <li><a><span class="icon icon-envelope"></span><span class="text">sinisa.inka-project.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Copyright -->
   Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="" target="_blank">INKA GROUP</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="sewaalat/js/jquery.min.js"></script>
  <script src="sewaalat/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="sewaalat/js/popper.min.js"></script>
  <script src="sewaalat/js/bootstrap.min.js"></script>
  <script src="sewaalat//js/jquery.easing.1.3.js"></script>
  <script src="sewaalat/js/jquery.waypoints.min.js"></script>
  <script src="sewaalat/js/jquery.stellar.min.js"></script>
  <script src="sewaalat/js/owl.carousel.min.js"></script>
  <script src="sewaalat/js/jquery.magnific-popup.min.js"></script>
  <script src="sewaalat/js/aos.js"></script>
  <script src="sewaalat/js/jquery.animateNumber.min.js"></script>
  <script src="sewaalat/js/bootstrap-datepicker.js"></script>
  <script src="sewaalat/js/jquery.timepicker.min.js"></script>
  <script src="sewaalat/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="sewaalat/js/google-map.js"></script>
  <script src="sewaalat/js/main.js"></script>
  
  </body>
</html>
