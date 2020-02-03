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
	 $id_sewa = htmlspecialchars($data["id_sewa"]);
 	$nik = htmlspecialchars($data["nik"]);
	$nama = htmlspecialchars($data["nama"]);
	$no_telepon = htmlspecialchars($data["no_telepon"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $id_barang = htmlspecialchars($data["id_barang"]);
    $tgl_sewa = htmlspecialchars($data["tgl_sewa"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);
    $lama_sewa = htmlspecialchars($data["lama_sewa"]);
    $harga_sewa = htmlspecialchars($data["harga_sewa"]);
    $asal = htmlspecialchars($data["asal"]);
    $alamat = htmlspecialchars($data["alamat"]);


 	//query update data
 	$query = "UPDATE sewa SET
 				 nama = '$nama',
				 no_telepon = '$no_telepon',
                 nama_barang = '$nama_barang',
                 id_barang = '$id_barang',
                 tanggal_sewa = '$tgl_sewa',
                 tanggal_kembali = '$tgl_kembali',
                 jumlah_hari = '$lama_sewa',
                 harga_sewa = '$harga_sewa',
                 asal = '$asal',
                 alamat = '$alamat'
 				where id_sewa = '$id_sewa'
 				";
	 $result = mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }

 ?>