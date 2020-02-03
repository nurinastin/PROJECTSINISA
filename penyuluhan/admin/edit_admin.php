<?php
require 'fungsi.php';

//variabel untuk menangkap id
$id = $_GET["id"];
//variabel untukmenampilkan data yang telah diubah
$data = tampil("SELECT * FROM penyuluhan WHERE id=$id")[0];
// var_dump($data); die;
if (isset($_POST["submit"])) {
//cek apakah data berhasil diubah atau tidak dengan menampilkan pop up
  if (ubah($_POST) > 0){
      
    // die;
    echo "
    <script>
      alert('Data berhasil diubah!!!');
      document.location.href='indexpenyuluhan_admin.php';
    </script>
    ";
    exit;
  } else {
    // die;
    echo "
    <script>
      alert('Data tidak ada yang dirubah!!!');
      document.location.href='indexpenyuluhan_admin.php';
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
	      <a class="navbar-brand" href="">JADWAL <span>PENYULUHAN</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          
	          
	          <li class="nav-item"><a href="../../sewaalat/sewa.php" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="cobaindexpenyuluhan.php" class="nav-link">Penyuluhan</a></li>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="../../index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../beranda/../about.php">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-3 bread">PENYULUHAN</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
 
        <!-- partial -->
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Ubah Data Penyuluhan</div>
              <div class="card-body">
                <form method="POST" action="">
                  <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control rounded-pill" id="nama" name="nama" required value="<?= $data["nama"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="nama_instansi">Nama Instansi</label>
                      <input type="text" class="form-control rounded-pill" id="nama_instansi" name="nama_instansi" required value="<?= $data["nama_instansi"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="materi">Materi</label>
                      <input type="text" class="form-control rounded-pill" id="materi" name="materi" required value="<?= $data["materi"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control rounded-pill" id="tanggal_input" name="tanggal_input" required value="<?= $data["tanggal_input"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tanggal_output">Tanggal output</label>
                      <input type="date" class="form-control rounded-pill" id="tanggal_output" name="tanggal_output" required value="<?= $data["tanggal_output"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                        <select name="status" class="form-control rounded-pill" id="status">
                        <?php 
                        
                          if($data['status'] == 'sudah dikonfirmasi'){
                        ?>

                          <option selected value="sudah dikonfirmasi">Sudah Dikonfirmasi</option>
                          <option value="belum dikonfirmasi">Belum Dikonfirmasi</option>

                        <?php } else {?>

                          <option value="sudah dikonfirmasi">Sudah Dikonfirmasi</option>
                          <option selected value="belum dikonfirmasi">Belum dikonfirmasi</option>

                        <?php } ?>
                        </select>
                    </div>
                    <br><hr>

                    <div class="row">
                      <div class="left col-md-6">
                        <a href="indexpenyuluhan_admin.php" class="btn btn-danger rounded-pill ml-3">Batal</a>
                      </div>
                    <div class="right col-md-6">
                      <button class="btn btn-primary rounded-pill ml-5" type="submit" name="submit">Ubah</button>
                    </div>
                  </div>
                </form>
              </div>
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
                                    <li><a href="about.html">Tentang</a></li>
                                    <li> <a href="contact.html">Hubungi</a></li>
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

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>