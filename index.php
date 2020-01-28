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
        <link href="beranda/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
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
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="logout.php" class="text-right">Logout</a>
                    </div>
                </div>
            </div>

            <!--header--->
            <header class="header-container">
                
                    <div class="top-row">
                        <div class="row">
                            
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
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

                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Beranda" class="active"><span>Beranda</span></a></li>
                                            <li><a data-hover="Tentang"  href="beranda/about.php"><span>Tentang</span></a></li>
                                            <li><a data-hover="Hubungi Kami" href="beranda/hubungi.php"><span>Hubungi Kami</span></a></li>
                                        </ul>
                                    </div>
                                    
                                </nav>
                            </div>
                        
                    </div>
                </div>
            </header>
            <!--end-->
            
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
            <div class="clearfix"></div>

            <!--service block--->
            <section class="service-block">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="beranda/images/icons/presentasi.png" a href="penyuluhan/pengguna/indexpenyuluhan.php.php">
                                </div>
                                <h4><a href="penyuluhan/pengguna/indexpenyuluhan.php">PENYULUHAN</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="beranda/images/icons/tractornew.png" a href="sewaalat/sewa.php">
                                </div>
                                <h4><a href="trysinisa/sewa.php">SEWA ALAT</a></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!---footer--->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>Menghubungi</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>JL. Semangka No.33 , Kelurahan Baratan, Patrang, Jember, Jawa Timur.</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+1-202-555-0100"> (0331) 567234</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:demo@info.com"> demo@info.com</a></p>
                                    </li>
                                </ul>
                                
                                <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>Menjelajahi</h4>
                                <ul class="list-unstyled footer-links">
                                    <li class="active"><a>Beranda</a></li>
                                    <li><a href="beranda/about.html">Tentang</a></li>
                                    <li> <a href="beranda/contact.html">Hubungi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        &copy; 2019.Designed by <a href="http://www.themevault.net/" target="_blank">INKA GROUP.</a>
                    </div>

                </div>
            </footer>

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Atas</span>
            </a>

        </div>
    </body>
</html>
