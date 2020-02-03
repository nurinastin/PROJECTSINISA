<!--sebagai jembatan untuk menginputkan data-->
<?php 
include 'koneksi.php'; //menyisipkan koneksi.php
//berfungsi menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
function ajukan($data){
    global $host;
  echo $nama = $data['nama']; //variabel nama berisi method nama
  echo $instansi = $data['nama_instansi']; //variabel instansi berisi method instansi
  echo $status = $_POST['status']; //variabel status berisi method status
  echo $tglinput = $data['tglinput']; //variabel tglinput berisi method tglinput
  echo $tgloutput = $data['tgloutput']; //variabel tgloutput berisi method tgloutput
  $materi = $data['materi'];

$result = mysqli_query($host,"INSERT INTO penyuluhan VALUES('','$nama','$instansi','belum dikonfirmasi','$tglinput','$tgloutput','$materi')");
  return mysqli_affected_rows($host);
}
?>