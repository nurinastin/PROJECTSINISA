<!--menghapus data yang telah dibuat-->
<?php 
include '../koneksi.php'; //menyisipkan koneksi.php
$id_barang = $_GET['id']; ////menyimpan data id yang akan dikirim melalui perantara URL
mysqli_query($host,"DELETE FROM barang WHERE id_barang='$id_barang'")or die(mysql_error());
/*menghapus data id pada tabel siswa
Jika MySQL gagal diakses, maka fungsi die() akan memerintahkan PHP untuk menghentikan program*/

header("location:sewaadmin.php?pesan=hapus");
//mengalihkan halaman kembali ke index.php sambil memngirim pesan yang berisi hapus pada parameter
?>