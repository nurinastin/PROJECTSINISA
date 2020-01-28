<?php
//koneksi database
$host = mysqli_connect("localhost","root","","sinisa");


//fungsi untuk menampilkan data dari database
function tampil($query){
	global $host;
	$result = mysqli_query($host,$query);
	$rows = [];
	while ($row  = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
		return $rows;
	}
	

function ubah($data){
 	global $host;
 	$id = htmlspecialchars($data["id"]);
	 $nama = htmlspecialchars($data["nama"]);
	 $instansi = htmlspecialchars($data["nama_instansi"]);
    $tanggal_input = htmlspecialchars($data["tanggal_input"]);
    $tanggal_output = htmlspecialchars($data["tanggal_output"]);
	$materi = htmlspecialchars($data["materi"]);

 	//query update data
 	$query = "UPDATE penyuluhan SET
 		nama = '$nama',
		nama_instansi = '$instansi',
        tanggal_input = '$tanggal_input',
        tanggal_output = '$tanggal_output',
		materi = '$materi'
 		where id = '$id'
 		";
 	$result = mysqli_query($chost,$query);
 	return mysqli_affected_rows($host);
 }

 ?>