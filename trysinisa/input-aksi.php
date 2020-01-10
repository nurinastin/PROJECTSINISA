<?php
 include 'koneksi.php';
  if (isset($_POST['input'])) {
   
    $NIK = $_POST['nik'];
    $Nama = $_POST['nama'];
    $Nomor_Telepon = $_POST['no_telp'];
    $

    $query = mysqli_query($host, "INSERT INTO sewa VALUES('','$NIK','$Nama','$Biaya_Penggilingan')");
  var_dump($query);

    if (mysqli_affected_rows($host) > 0) {
      echo "
        <script>
          alert ('Data berhasil diinput');
          document.location.href = 'data-penggilingan.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert ('Gagal menginput data');
          document.location.href = 'input-penggilingan.php';
        </script>
      ";
    }
  }
  
?>