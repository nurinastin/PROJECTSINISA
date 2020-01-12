<!--sebagai jembatan untuk mengubah data-->
<?php 
 
include "koneksi.php"; //menyisipkan koneksi.php
$id = $_POST['id'];
$nama = $_POST['nama']; //variabel nim berisi method nim
$instansi = $_POST['nama_instansi']; //variabel kelas berisi method kelas
$status = $_POST['status']; //variabel nama berisi method nama
$tglinput = $_POST['tanggal_input']; //variabel alamat berisi method alamat
$tgloutput = $_POST['tanggal_output']; //variabel jk berisi method jenis kelamin
 
mysqli_query($host,"UPDATE penyuluhan SET  nama='$nama', nama_instansi='$nama_instansi', status = '$status' , tanggal_input='$tglinput' , tanggal_output='$tgloutput' WHERE id='$id'");
//untuk mengisikan values pada tabel siswa dengan variabel nim,nama,kelas,alamat,jenis kelamin dengan data id
//header("location:peny_edithapus_admin.php?pesan=update");
//mengalihkan halaman kembali ke index.php sambil mengirim pesan yang berisi perubahan pada parameter
//mboh opo slahe iki ngelu aku. bu ee yopo ikiiii 
?>