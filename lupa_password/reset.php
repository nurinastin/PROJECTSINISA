<?php

  include "../koneksi.php";

  if(!isset($_GET["reset_pass"])){

    exit("Can't find page");

  }

  $code = $_GET["reset_pass"];

  $query = mysqli_query($host, "SELECT email_pengguna FROM `lupa_password` WHERE code_lupas = '$code' ");

  if(mysqli_num_rows($query)==0){

    exit("Can't find page");

  }

  $row = mysqli_fetch_array($query);

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

  <title>SINISA | Lupa Password</title>

</head>

<body class="bg-gradient-light" style="background-image: url('images/sawah.jpg');">
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-85 p-b-20">
			<span class="login100-form-title p-b-40">
				Ganti Kata Sandi
			</span>
			<span class="login100-form-avatar">
				<img src="images/SINISA.png" alt="">
			</span>
      <div class="text-center">
        <p class="txt1">Harap masukkan password baru untuk akun anda. Pastikan anda mengingatnya. Anda dapat mereset password kapan saja melalui email anda</p>
      </div><br><br>

      <!-- form mulai -->
      <form class="user needs-validation" action="new-pass.php" method="POST" novalidate>

        <input type="hidden" value="<?php echo $row["email_pengguna"]?>" name="email">

        <!-- password -->
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user password" id="inputPassword"
             placeholder="Kata Sandi" name="password" required>
              <div class="invalid-feedback">
                Harap isi password untuk akun anda.
              </div>
          </div>
            <div class="col-sm-6">
              <input type="password" class="form-control form-control-user confpass" id="repeatPassword"
                placeholder="Ulangi Kata Sandi" name="password_repeat" required>
                <div class="invalid-feedback">
                  Harap isi konfirmasi password untuk akun anda.
            </div>
          </div>
        </div>

        <!-- button submit registrasi -->
        <button type="submit" id="submit" name="new_pass" class="btn btn-primary btn-user btn-block">Ganti Kata Sandi</button>
          </form>
            <!-- akhir form -->
            <hr>
              <ul class="login-more p-t-50">
                <li class="m-b-8">
                  <span class="txt1">
                    Sudah punya akun? Klik
                  </span>
                  <a href="../loginlogout/Login/indexlogin.php" class="txt2">
                    Masuk
                  </a>
                </li>

                <li>
                  <span class="txt1">
                    Tidak punya akun? Klik
                  </span>
                  <a href="../loginlogout/Register/indexdaftar.php" class="txt2">
                    Daftar 
                  </a>
                </li>
              </ul>
              <!-- akhir form -->
      </div>
    </div>
  </div>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>


  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    });    


  </script>
</body>

</html>