<!--sebagai jembatan untuk menginputkan data-->
<?php 
include 'koneksi.php'; //menyisipkan koneksi.php
//berfungsi menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
$nama = $_POST['nama']; //variabel nim berisi method nim
$instansi = $_POST['nama_instansi']; //variabel kelas berisi method kelas
$tglinput = $_POST['tglinput']; //variabel alamat berisi method alamat
$tgloutput = $_POST['tgloutput']; //variabel jk berisi method jenis kelamin



$result = mysqli_query($host,"INSERT INTO penyuluhan VALUES('','$nama', '$instansi','$tglinput','$tgloutput')");
  echo mysqli_error($host);
  mysqli_affected_rows($result);
  header("location:pengajuan_jadwal.php");




 

//untuk mengisikan values pada tabel siswa dengan variabel nim,nama,kelas,alamat,jenis kelamin


//mengalihkan halaman kembali ke index.php sambil mengirim pesan yang berisi input pada parameter
?>