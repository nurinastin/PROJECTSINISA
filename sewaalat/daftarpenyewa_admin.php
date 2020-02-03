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
          <a class="navbar-brand" href="">Pemberitahuan <span>Sewa Alat</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              
             
              <li class="nav-item"><a href="sewaadmin.php" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="../indexpenyuluhan.php" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="../index_admin.php" class="nav-link">Beranda</a></li>
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
            <p class="breadcrumbs"><span class="mr-2"><a href="../index_admin.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../../beranda/about.php">Tentang Kami <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-3 bread">Pemberitahuan</h1>
          </div>
        </div>
      </div>
    </section>

        <section class="ftco-section contact-section">
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

                        <!--membuat tabel dengan field yang akan ditampilkan-->
                        <h3></h3>
                        <!--membuat tabel dengan border 1-->
                        <table class="table table-responsive-sm tble striped table-hover text-center">
                          <thead class="bg-dark text-white">
                            <tr>
                            <!--kolom pada tabel-->
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Nama Barang</th>
                                <th>ID Barang</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th> 
                                <th>Lama Sewa</th>
                                <th>Harga Sewa</th> 
                                <th>Asal</th>
                                <th>Alamat</th>
                                
                            </tr>
                          </thead>

                            <?php 
                            include "../koneksi.php"; 
                            $query_mysql = mysqli_query($host,"SELECT * FROM sewa")or die(mysql_error());
                            $nomor = 1; 
                            //variabel nomor dengan patokan 1 untuk di looping di tabelnya
                            //while itu perulangan tanpa batas
                            while($data = mysqli_fetch_array($query_mysql)){
                                //mengubah baris data yang dipilih menjadi pecahan array
                            ?>
                            <tr>
                                <!--variabel untuk menampung suatu data-->
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data['nik']; ?></td> <!--perulangan pada variabel nik-->
                                <td><?php echo $data['nama']; ?></td> <!--variabel nama-->
                                <td><?php echo $data['no_telepon']; ?></td> <!--variabel no telp-->
                                <td><?php echo $data['nama_barang']; ?></td> <!--variabel nama barang-->
                                <td><?php echo $data['id_barang']; ?></td> <!--variabel id barang-->
                                <td><?php echo $data['tanggal_sewa']; ?></td> <!--variabel tgl sewa-->
                                <td><?php echo $data['tanggal_kembali']; ?></td> <!--variabel tgl kembali-->
                                <td><?php echo $data['jumlah_hari']; ?></td>
                                <td><?php echo $data['harga_sewa']; ?></td>
                                <td><?php echo $data['asal']; ?></td> <!--variabel asal-->
                                <td><?php echo $data['alamat']; ?></td> <!--variabel alamat-->
                              <td>
                                <a class="edit" href="editpenyewa_admin.php?id=<?php echo $data['id_sewa']; ?>">Edit</a> |
                                    <!--menghubungkan ke edit.php dari data nik-->
                                    <a class="hapus" href="hapusdata_admin.php?id=<?php echo $data['id_sewa']; ?>">Hapus</a> 
                                    <!--menghubungkan ke hapus.php dari data nik-->        
                                </td>
                            </tr>

                            <?php } ?>
                        </table>
                        <h3>Jumlah Penyewa : <?php echo $nomor-1; ?> </h3>
                        <!--menampilkan jumlah sekelas, di -1 karena index mulai dri 1 bukan 0-->
                      </thead>
                    </table>
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
   
   </body> 
</html>