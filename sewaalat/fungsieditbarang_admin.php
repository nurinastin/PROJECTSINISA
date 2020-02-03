<?php
//koneksi database
$conn = mysqli_connect("localhost","root","","sinisa");


//fungsi untuk menampilkan data dari database
function tampil($query){
	global $conn;
	$result = mysqli_query($conn,$query);

	$rows = [];
	while ($row  = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
		return $rows;
	}
	

function ubah($data){
 	global $conn;
 	$id_barang = htmlspecialchars($data["id_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambar = htmlspecialchars($data["gambar"]);
    

 	//query update data
 	$query = "UPDATE barang SET
 				 nama_barang = '$nama_barang',
				 harga = '$harga',
                 stok = '$stok',
                 gambar = '$gambar'
 				where id_barang = '$id_barang'
 				";
 	$result = mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }


 ?>