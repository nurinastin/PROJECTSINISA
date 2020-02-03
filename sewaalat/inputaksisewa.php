<?php
 include '../koneksi.php';
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $nama_barang = $_POST['namabarang'];
    $id_barang = $_POST['idbarang'];
    $tanggal_sewa = $_POST['tgl_sewa'];
    $tanggal_kembali = $_POST['tgl_kembali'];
    $lama_sewa = $_POST['lamasewa'];
    $harga_sewa = $_POST['harga_sewa'];
    $asal = $_POST['asal'];
    $alamat = $_POST['alamat'];
    $query = mysqli_query($host,"INSERT INTO sewa VALUES
               ('$nik',
                '$nama',
                '$no_telepon',
                '$nama_barang',
                '$id_barang',
                '$tanggal_sewa',
                '$tanggal_kembali',
                '$lama_sewa',
                '$harga_sewa',
                '$asal',
                '$alamat')
              ");

    if (!$query) {
      echo "gagal";
    }else{
      echo "berhasil";
    }
?>