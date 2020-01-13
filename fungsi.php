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
 	$id = htmlspecialchars($data["id"]);
 	$nama = htmlspecialchars($data["nama"]);
    $tanggal_input = htmlspecialchars($data["tanggal_input"]);
    $tanggal_output = htmlspecialchars($data["tanggal_output"]);


 	//query update data
 	$query = "UPDATE penyuluhan SET
 				nama = '$nama',
                 tanggal_input = '$tanggal_input',
                 tanggal_output = '$tanggal_output'
 				where id = '$id'
 				";
 	$result = mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }

 ?>