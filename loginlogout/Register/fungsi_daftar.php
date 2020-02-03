<?php
//koneksi database
$host = mysqli_connect("localhost","root","","sinisa");

//funugsi untuk menyimpan data registrasi/pendaftaran user ke dalam database
function registrasi($data){
    global $host;
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $email_pengguna = htmlspecialchars($data["email_pengguna"]);

    //query insert data
    $query = "INSERT INTO user values ('','$nik','$nama','$alamat','$username','$password','user','$email_pengguna')";
    mysqli_query($host,$query);
    return mysqli_affected_rows($host);
}

?>