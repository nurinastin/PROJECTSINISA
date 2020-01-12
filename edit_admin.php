<!DOCTYPE html>
<html lang="en">

<head>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>Penyuluhan</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <a href="#"> </a>
                                  <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
                        </div>
                        <div class="col-md-6">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                                  
                            </div>
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
                                            <a class="navbar-brand brand-logo" href="index.php"><img src="imagesp/SINISA.png" alt="logo"/></a>
                                            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="imagesp/SINISA.png" alt="logo"/></a>
                                          </div>  
                                        </div>
                                      </nav>
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Beranda" href="index.php"><span>Beranda</span></a></li>
                                            <li><a data-hover="Tentang"  href="about.html"><span>Tentang</span></a></li>
                                            <li><a data-hover="Hubungi Kami" href="contact.html"><span>Hubungi Kami</span></a></li>
                                        </ul>
                                    </div>
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!--end-->


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Penyuluhan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="cssp/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="imagesp/favicon.png" />
</head>
<body>
  <div class="container-scroller">

  
    
    
      <!-- partial -->
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <center>
                  <p class="card-title"><h3>EDIT DATA</h3></p>
                </center>

                <?php 
                include "koneksi.php"; //menyisipkan file koneksi.php
                $id = $_GET['id']; //menyimpan data id yang akan dikirim melalui perantara URL
                $query_mysql = mysqli_query($host, "SELECT * FROM penyuluhan WHERE id='$id'")or die(mysql_error());
                /*argumen pertama fungsi mysql_query(). Pada bagian inilah kita menulis query MySQL yang berisi 
                data pada tabel siswa. 
                Query tersebut selanjutnya akan dikirim kepada MySQL Server untuk diproses.
                Jika MySQL gagal diakses, maka fungsi die() akan memerintahkan PHP untuk menghentikan program*/
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                    //mengubah baris data yang dipilih menjadi pecahan array
                ?>
                <form action="update_admin.php" method="post">
                
                <!--mendefinisikan tindakan yang dilakukan oleh form dikirimkan-->		
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <!--menginputkan nim-->
                                <input type="hidden" name="nama" value="<?php echo $data['nama'] ?>">
                                <!--value terbentuk karena data yang terdapat pada inputan di variabel id-->
                                <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                            </td>					
                        </tr>	
                        <tr>
                            <td>Instansi</td>
                            <!--menginputkan nama-->
                            <td><input type="text" name="nama_instansi" value="<?php echo $data['nama_instansi'] ?>"></td>					
                        </tr>
                        <tr>
                        <td>Nama</td>
                            <td>
                                <!--menginputkan nim-->
                                <input type="hidden" name="status" value="<?php echo $data['status'] ?>">
                                <!--value terbentuk karena data yang terdapat pada inputan di variabel id-->
                                <input type="text" name="status" value="<?php echo $data['status'] ?>">
                            </td>					
                        </tr>	
                        <tr>
                            <td>Tanggal Input</td>
                            <!--menginputkan kelas-->
                            <td><input type="date" name="tglinput" id="tglinput" value="<?=date('Y-m-d')?>" /></td>					
                        </tr>	
                        <tr>
                            <td>Tanggal Output</td>
                            <!--menginputkan alamat-->
                            <td><input type="date" name="tgloutput" id="tgloutput" value="<?date('Y-m-d')?>" /></td>					
                        </tr>	
                    
                        <tr>
                            <td></td>
                            <!--menyimpan data-->
                            <td><input type="submit" value="Simpan"></td>					
                        </tr>				
                    </table>
                </form>
                <?php } ?>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

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