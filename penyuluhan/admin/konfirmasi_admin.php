<?php

include '../koneksi.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$query = "UPDATE penyuluhan SET status = 'sudah dikonfirmasi' WHERE id='$id'";
	mysqli_query($host,$query);

	header("location:indexpenyuluhan_admin.php");









}