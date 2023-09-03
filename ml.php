<?php 
include 'koneksi.php';

session_start();

if($_SESSION['status'] !="login"){
  header("location:login.php");
}
echo "hai selamat datang";
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ml.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="menu">
      <img src="gambar/gambar 6.png" alt="api" />
      <h1>TOP UP ATMA</h1>
      <button class="menu-satu"><a href="profil.php">PROFIL</a></button>
      <button><a href="logout.php">LOGOUT</a></button>
      <button><a href="hasilbelanja.php">HASIL</a></button>
    </div>
    <div class="rumah1">
      <div class="ml1">
        <button><a href="beli.php">beli</a></button>
        
        <!-- <img src="gambar/ml 1.jpeg" alt="ml 1" /> -->
        <!-- <h4>PAKET MURAH</h4> -->
      </div>
      <div class="ml2">
        <button><a href="beli.php">beli</a></button>
        <!-- <img src="gambar/ml 2.jpeg" alt="ml 2" /> -->
        <!-- <h4>PAKET AFK</h4> -->
      </div>
      <div class="ml3">
        <button><a href="beli.php">beli</a></button>
        <!-- <img src="gambar/ml 3.jpeg" alt="ml 3" /> -->
        <!-- <h4>PAKET JOKI</h4> -->
      </div>
      <div class="ml4">
        <button><a href="beli.php">beli</a></button>
        <!-- <img src="gambar/ml 4.jpeg" alt="ml 4" /> -->
        <!-- <h4>PAKET SAVAGE</h4> -->
      </div>
    </div>
  </body>
</html>
