<?php 
  require_once '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>si-nisa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="">Detail <span>Alat</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="sewa.php" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="../penyuluhan/indexpenyuluhan.php" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="../index.php" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sawah.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../about.php">Tentang Kami <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-3 bread">Detail Alat Pertanian</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-alat-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-8">
      			
      			</div>
      		</div>
      	</div>
      	
      	</div>
      <?php if (isset($_GET['id'])): ?>
      <?php 
        $id = $_GET['id'];
        $result = mysqli_query($host,"SELECT * FROM barang WHERE id_barang = '$id'");
      ?>
      <?php while ($data = mysqli_fetch_assoc($result)) { ?>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <p><?= $data['nama_barang']; ?></p>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	
						   
                  <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
						      <p>Kode Barang : <?= $data['id_barang']; ?></p>
						    </div>
                <div class="form-group">
                <a href="formsewa.php?id=<?= $data['id_barang']; ?>"></a>
                <p>Stok Barang : <?= $data['stok']; ?></p>
                </div>
                <div class="form-group">
                <a href="formsewa.php?id=<?= $data['stok']; ?>"></a>
              </div>
            </div>

            <center><div><a href="formsewa.php?id=<?= $data['id_barang']; ?>" class="btn btn-black btn-outline-black ml-1">Sewa</a>
            </div>
          </center>

          </div>
						  </div>
						</div>
		      </div>
				</div>
      <?php } ?>
      <?php endif ?>

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
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"> (0331) 567234</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sinisa.inka-project.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- copyright -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a target="_blank">INKA GROUP</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>