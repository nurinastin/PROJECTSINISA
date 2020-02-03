<?php
session_start();
require 'fungsi_daftar.php';

//code simpan
if (isset($_POST['submit'])) {
	if (registrasi($_POST) > 0){
		echo "
		<script>
		alert('Registrasi Berhasil!!!');
		document.location.href='../Login/indexlogin.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('Registrasi Gagal!!!');
		document.location.href='indexdaftar.php';
		</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SINISA | Daftar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				
				<form method="POST" action="">
					<h3>Daftar</h3>
					<span class="login100-form-avatar">
						<img src="images/SINISA.png" alt="">
					</span>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="NIK" name="nik">
					</div>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Nama" name="nama">
					</div>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Alamat" name="alamat">
					</div>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Email" name="email_pengguna">
					</div>
					
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-holder">
						<input type="password" class="form-control" placeholder="Kata Sandi" name="password">
					</div>
					<button type="submit" name="submit">
						<span>Daftar</span>
					</button>
				</form>
				
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>