<?php
session_start();
require '../input_aksi.php';

//code simpan
if (isset($_POST['submit'])) {
	if (ajukan($_POST) > 0){
		echo "
		<script>
		alert('Jadwal Berhasil Diajukan!!!');
		document.location.href='indexpenyuluhan.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('Gagal Mengajukan Jadwal!!!');
		document.location.href='pengajuan.php';
		</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PENYULUHAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../sewaalat/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../sewaalat/css/animate.css">
    
    <link rel="stylesheet" href="../../sewaalat/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../sewaalat/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../sewaalat/css/magnific-popup.css">

    <link rel="stylesheet" href="../../sewaalat/css/aos.css">

    <link rel="stylesheet" href="../../sewaalat/css/ionicons.min.css">

    <link rel="stylesheet" href="../../sewaalat/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../sewaalat/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../sewaalat/css/flaticon.css">
    <link rel="stylesheet" href="../../sewaalat/css/icomoon.css">
    <link rel="stylesheet" href="../../sewaalat/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="">PENGAJUAN<span>JADWAL</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          
	          
	          <li class="nav-item"><a href="../../sewaalat/sewa.php" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="indexpenyuluhan.php" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="../../index.php" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="../../logout.php" class="nav-link">Logout</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../../beranda/images/sawahblur.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="../../index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../../beranda/about.php">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-3 bread">PENYULUHAN</h1>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
                    <p><h5>Pengajuan jadwal yang diajukan pada hari ini, bisa melakukan penyuluhan mulai tanggal :
                    </h5></p>
                    <?php echo date('d F Y',strtotime("+7 day")); ?>
                    <p><h5>Jadwal penyuluhan yang telah dibuat tidak bisa dibatalkan. Pastikan anda membuat jadwal yang tepat.</h5></p>
		        </div>
          </div>
        </div>

        <section class="service-block">
      <link href="../../beranda/css/style.css" rel="stylesheet">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="../../beranda/images/icons/list.png" a href="indexpenyuluhan.php">
                                </div>
                                <h4><a href="indexpenyuluhan.php">JADWAL PENYULUHAN</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="../../beranda/images/icons/planner.png" a href="pengajuan.php">
                                </div>
                                <h4><a href="pengajuan.php">PENGAJUAN JADWAL</a></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section><br>
        
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h4 class="text-center">Harap isi data pengajuan jadwal <br>dengan benar dan lengkap</h4><br><br>
            <form action="" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Instansi</label>
                        <input type="text" class="form-control" name="nama_instansi" id="asal" placeholder="Nama Instansi" required>
              </div>
              <div class="form-group">
                <label for="nama">Status
                        <input type="text" class="form-control" name="status" id="status" value="<?= $data['status']; ?>" readonly>
              </label>
              </div>
              <div class="form-group">
                <label for="nama">Judul Materi</label>
                  <input type="text" class="form-control" name="materi" id="materi" placeholder="Tuliskan Judul Materi Penyuluhan Dengan Lengkap" required>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal Pengajuan</label>
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="Tanggal Input" name="tglinput" id="tglinput" value="<?= date('Y-m-d')?>" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal Pelaksanaan</label>
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="Tanggal Pelaksanaan" name="tgloutput" id="tgloutput" min="<?= date('Y-m-d',strtotime("+7 day"));?>" value="<?date('Y-m-d')?>" required>
                      <div class="invalid-feedback">    
                      </div>
                  </div>

              <div class="form-group">
                <button  name="submit" type="submit">Ajukan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
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


  <script src="../../sewaalat/js/jquery.min.js"></script>
  <script src="../../sewaalat/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../sewaalat/js/popper.min.js"></script>
  <script src="../../sewaalat/js/bootstrap.min.js"></script>
  <script src="../../sewaalat/js/jquery.easing.1.3.js"></script>
  <script src="../../sewaalat/js/jquery.waypoints.min.js"></script>
  <script src="../../sewaalat/js/jquery.stellar.min.js"></script>
  <script src="../../sewaalat/js/owl.carousel.min.js"></script>
  <script src="../../sewaalat/js/jquery.magnific-popup.min.js"></script>
  <script src="../../sewaalat/js/aos.js"></script>
  <script src="../../sewaalat/js/jquery.animateNumber.min.js"></script>
  <script src="../../sewaalat/js/bootstrap-datepicker.js"></script>
  <script src="../../sewaalat/js/jquery.timepicker.min.js"></script>
  <script src="../../sewaalat/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../../sewaalat/js/google-map.js"></script>
  <script src="../../sewaalat/js/main.js"></script>
    
  </body>
</html>