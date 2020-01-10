<!--sebagai jembatan untuk mengubah data-->
<?php 
 
include 'koneksi.php'; //menyisipkan koneksi.php
$id = $_POST['id'];
$nama = $_POST['nama']; //variabel nim berisi method nim
$kelas = $_POST['nama_instansi'];
$tglinput = $_POST['tglinput'];
$tgloutput = $_POST['tgloutput'];

 
mysqli_query($host,"UPDATE  SET penyuluhan nama='$nama', nama_instansi='$nama_instansi', tglinput='$tglinput' , tgloutput='$tgloutput' WHERE id='$id'");
//untuk mengisikan values pada tabel siswa dengan variabel nim,nama,kelas,alamat,jenis kelamin dengan data id
header("location:peny_edithapus_admin.php?pesan=update");
//mengalihkan halaman kembali ke index.php sambil mengirim pesan yang berisi perubahan pada parameter
?>