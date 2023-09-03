<?php 
include ("koneksi.php");

$masuk = $_POST['masuk'];
$pintu = $_POST['pintu'];

$login = mysqli_query($koneksi,"SELECT * FROM register WHERE username = '$masuk' and passwor = '$pintu' ");
$cek = mysqli_num_rows($login);

if($cek>0){
    session_start();
    $_SESSION['masuk'] = $masuk;
    $_SESSION['status'] = "login";
    header('location:halamanutma.php');
}

else{
    header('location:login.php');
}


?>