<?php
include "koneksi.php";

$id = $_POST['id'];
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];

$cek_data = mysqli_query($conn, "SELECT * FROM user where username='$username'");
$cek = mysqli_num_rows($cek_data);

if ( $cek > 0 ){
    echo "data anda sudah ada";
}else {
    $input = mysqli_query($conn, "INSERT INTO user (id,username,password,email)VALUES('$id','$username','$password','$email')");
    if ($input ){
        echo "data anda telah terdaftar";
    }
}
?>