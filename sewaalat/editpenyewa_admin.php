<?php 
  require_once '../koneksi.php';
  if (isset($_GET['id'])) {
    $id_sewa = $_GET['id'];
    $result = mysqli_query($host,"SELECT * FROM sewa WHERE id_sewa = '$id_sewa'");
    $data = mysqli_fetch_assoc($result);

  }
?>

<?php
require 'fungsieditpenyewa_admin.php';

//variabel untuk menangkap id
$id_sewa = $_GET["id"];
//variabel untukmenampilkan data yang telah diubah
$data = tampil("SELECT * FROM sewa WHERE id_sewa='$id_sewa'")[0];


if (isset($_POST["submit"])) {
//cek apakah data berhasil diubah atau tidak dengan menampilkan pop up
  if (ubah($_POST) > 0){
      
    echo "
    <script>
      alert('Data berhasil diubah!!!');
      document.location.href='daftarpenyewa_admin.php';
    </script>
    ";
    exit;
  } else {
    echo "
    <script>
      alert('Data tidak ada yang dirubah!!!');
      document.location.href='daftarpenyewa_admin.php';
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
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sawah.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="../../index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../beranda/../about.php">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
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
                    <!-- <table id="recent-purchases-listing" class="table">
                      <thead> -->
        <!-- partial -->
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Ubah Data Penyewa</div>
              <div class="card-body">
                <form method="POST" action="">
                  <input type="hidden" name="id_sewa" value="<?= $data["id_sewa"]; ?>">
                  <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="text" class="form-control rounded-pill" id="nik" name="nik" required value="<?= $data["nik"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control rounded-pill" id="nama" name="nama" required value="<?= $data["nama"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="no_telepon">Nomor Telepon</label>
                      <input type="text" class="form-control rounded-pill" id="no_telepon" name="no_telepon" required value="<?= $data["no_telepon"]; ?>">
                    </div>
              <div class="form-group">
                      <label for="nama_barang">Nama Barang</label>
                      <input type="text" class="form-control rounded-pill" id="nama_barang" name="nama_barang" required value="<?= $data["nama_barang"]; ?>">
                    </div>
              <div class="form-group">
                      <label for="id_barang">ID Barang</label>
                      <input type="text" class="form-control rounded-pill" id="id_barang" name="id_barang" required value="<?= $data["id_barang"]; ?>">
                    </div>
              <div class="form-group">
                <label for="tgl_sewa">Tanggal Sewa</label>
                        <div class="input-group">
                            <input id="tgl_sewa" type="date" min="<?= date('Y-m-d'); ?>" max="" class="form-control rounded-pill" name="tgl_sewa" required readonly value="<?= $data["tanggal_sewa"]; ?>">
              </div>
              </div>
              <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali</label>
                        <div class="input-group">
                            <input id="tgl_kembali" type="date" min="" max="" class="form-control rounded-pill" name="tgl_kembali" required value="<?= $data["tanggal_kembali"]; ?>">
               </div>
              </div>
              
              <div class="form-group">
                <label for="lama_sewa">Lama Sewa</label>
                  <input type="text" class="form-control rounded-pill" name="lama_sewa" id="lama_sewa" placeholder="Lama Sewa" required readonly value="<?= $data["jumlah_hari"]; ?>">
                          
              </div>
              <div class="form-group">
                <label for="harga_sewa">Harga Total Sewa</label>
                        <input type="text" class="form-control rounded-pill" name="harga_sewa" id="harga_sewa" placeholder="Harga Sewa" required readonly value="<?= $data["harga_sewa"]; ?>">
              </div>
              <div class="form-group">
                      <label for="asal">Asal</label>
                      <input type="text" class="form-control rounded-pill" id="asal" name="asal" required value="<?= $data["asal"]; ?>">
                    </div>
              <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control rounded-pill" id="alamat" name="alamat" required value="<?= $data["alamat"]; ?>">
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
        <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang SI-NISA</h2>
              <p>Sebuah aplikasi yang diharapkan dapat membantu kegiatan pertanian dalam menyewa alat pertanian dan penyuluhan yang diisi oleh ahli kepada para petani.</p>
              
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4"></div>
          </div>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a>INKA GROUP</a>
  </p>
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
  <script src="js/main.js"></script>
   
<script>
    $(document).ready(function(){
      
      $('#tgl_sewa').change(function(){
        let tgl_sewa = $('#tgl_sewa').val();
        $('#tgl_kembali').attr('min',tgl_sewa);
      });

      $('input[type=date]').change(function(){
        let tgl_sewa = $('#tgl_sewa').val();
        let tgl_kembali = $('#tgl_kembali').val();
        let tgl1 = parseInt(tgl_sewa.slice(8,10));
        let tgl2 = parseInt(tgl_kembali.slice(8,10));
        let lama = tgl2 - tgl1;
        let harga = <?= $data['harga_sewa'] ?>;
          if (!lama) {
            $('#lama_sewa').val(0);
            $('#harga_sewa').val(0);
          }else if(tgl2 < tgl1){
            let lama = tgl1 - tgl2;
            $('#lama_sewa').val(lama);
            $('#harga_sewa').val(lama * harga);
          }else{
            $('#lama_sewa').val(lama);
            $('#harga_sewa').val(lama * harga);
          }
      });

      $('#input').on('click',function(e){
        let data1 = $('#form-input').serialize();
        $.ajax({
          url:'fungsieditpenyewa_admin.php',
          method:'post',
          data:data1,
          success:function(data){
            Swal.fire(
              'Data Berhasil Disimpan!',
              'Klik untuk lanjut!',
              'success'
            )
              window.location.href='daftarpenyewa_admin.php'
          }
        });
        e.preventDefault();
      });

    });
  </script>

   </body> 
</html>