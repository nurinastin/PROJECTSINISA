<?php
require 'fungsieditbarang_admin.php';

//variabel untuk menangkap id
$id_barang = $_GET["id"];
//variabel untukmenampilkan data yang telah diubah
$data = tampil("SELECT * FROM barang WHERE id_barang='$id_barang'")[0];

if (isset($_POST["submit"])) {
  $id = $_POST['id_barang'];
  $alamat = "detailbarang_admin.php?id=$id";
//cek apakah data berhasil diubah atau tidak dengan menampilkan pop up
  if (ubah($_POST) > 0){
      
    echo "
    <script>
      alert('Data berhasil diubah!!!');
      document.location.href='$alamat';
    </script>
    ";
    exit;
  } else {
    echo "
    <script>
      alert('Data tidak ada yang dirubah!!!');
      document.location.href='$alamat';
    </script>
    ";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sewa Alat</title>
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
	      <a class="navbar-brand" href="">SEWA <span>ALAT</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          
	          
	          <li class="nav-item"><a href="sewaadmin.php" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="../../penyuluhan/cobaindexpenyuluhan.php" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="../../index.php" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="../../logout.php" class="nav-link">Logout</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../../beranda/images/sawah.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="../../index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../../beranda/about.php">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-3 bread">DAFTAR PENYEWA</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5">
 
 </div>
          </div>
        </div>
        
        <div class="table-responsive">
 
        <!-- partial -->
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Ubah Data Barang</div>
              <div class="card-body">
                <form method="POST" action="">
                  <!-- <input type="hidden" name="id_barang" value="<?= $data["id_barang"]; ?>"> -->
                  <div class="form-group">
                      <label for="nama">ID Barang</label>
                        <input type="text" class="form-control rounded-pill" name="id_barang" id="id_barang" required value="<?= $data["id_barang"]; ?>">
              </div>
              <div class="form-group">
                <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required value="<?= $data["nama_barang"]; ?>">
              </div>
              <div class="form-group">
                <label for="nama">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?= $data["harga"]; ?>"" required >
              <div class="form-group">
                <label for="nama">Stok</label>
                        <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?= $data["stok"]; ?>"" required>
              </div>
             <div class="form-group">
                <label for="nama">Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Gambar" value="<?= $data["gambar"]; ?>" required>
              </div>
                    <br><hr>

                    <div class="row">
                      <div class="left col-md-6">
                        <a href="daftarpenyewa_admin.php" class="btn btn-danger rounded-pill ml-3">Batal</a>
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

                    <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Copyright -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a>INKA GROUP</a>
  </p>
          </div>
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