<!--sebagai jembatan untuk menginputkan data-->
<?php 
include 'koneksi.php'; //menyisipkan koneksi.php
//berfungsi menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
function ajukan($data){
    global $host;
  echo $nama = $data['nama']; //variabel nim berisi method nim
  echo $instansi = $data['nama_instansi']; //variabel kelas berisi method kelas
  echo $tglinput = $data['tglinput']; //variabel alamat berisi method alamat
  echo $tgloutput = $data['tgloutput']; //variabel jk berisi method jenis kelamin
  $materi = $data['materi'];

$result = mysqli_query($host,"INSERT INTO penyuluhan VALUES('','$nama','$instansi','belum dikonfirmasi','$tglinput','$tgloutput','$materi')");
  return mysqli_affected_rows($host);
}
?>