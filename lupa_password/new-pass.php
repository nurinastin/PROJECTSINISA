<?php

include "../koneksi.php";

if(isset($_POST["new_pass"])){
    session_start();

    $email = $_POST["email"];
    $pass = $_POST["password"];
    $pass_repeat = $_POST["password_repeat"];
    $kode = $_SESSION['code'];

    $query = mysqli_query($host, "UPDATE user SET password = '$pass_repeat' WHERE email_pengguna = '$email'");

    if($query){

                mysqli_query($host, "DELETE FROM lupa_password WHERE code_lupas = '$kode'");
                unset($_SESSION["code"]);
    }


    header("location: forgot-password-success.php");
    // echo "Password Berhasil Di Update";

}

 ?>