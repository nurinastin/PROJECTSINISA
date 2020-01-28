<?php
 include '../koneksi.php';
  if (isset($_POST['input'])) {
   
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $nama_barang = $_POST['id_barang'];
    $id_barang = $_POST['id_barang'];
    $tanggal_sewa = $_POST['tgl_sewa'];
    $tanggal_kembali = $_POST['tgl_kembali'];
    $asal = $_POST['asal'];
    $alamat = $_POST['alamat'];
    $query = mysqli_query($host, "INSERT INTO sewa VALUES('$nik','$nama','$no_telepon' ,'$nama_barang','$id_barang','$tanggal_sewa','$tanggal_kembali','$asal','$alamat')");

    if (mysqli_affected_rows($host) > 0) {
      echo "
        <script>
          alert ('Data berhasil diinput');
          document.location.href = 'notif.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert ('Gagal menginput data');
          document.location.href = 'formsewa.php';
        </script>
      ";
    }
  }
  
?>