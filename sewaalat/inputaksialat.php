<?php
 include '../koneksi.php';
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $gambar = $_POST['gambar'];   
    $query = mysqli_query($host,"INSERT INTO barang VALUES
               ('$id_barang',
                '$nama_barang',
                '$harga',
                '$stok',
                '$gambar')
              ");

    if ($query) {
      header('location:sewaadmin.php');
    }
?>