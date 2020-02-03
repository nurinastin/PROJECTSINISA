<!--menghapus data yang telah dibuat-->
<?php 
include '../koneksi.php'; //menyisipkan koneksi.php
$nik = $_GET['id']; ////menyimpan data id yang akan dikirim melalui perantara URL

mysqli_query($host,"DELETE FROM sewa WHERE nik='$nik'")or die(mysql_error());
/*menghapus data id pada tabel siswa
Jika MySQL gagal diakses, maka fungsi die() akan memerintahkan PHP untuk menghentikan program*/

header("location:daftarpenyewa_admin.php?pesan=hapus");
//mengalihkan halaman kembali ke index.php sambil memngirim pesan yang berisi hapus pada parameter
?>