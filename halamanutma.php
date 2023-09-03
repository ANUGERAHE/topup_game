<?php 
include 'koneksi.php';

session_start();

if($_SESSION['status'] !="login"){
  header("location:login.php");
}
echo "hai selamat datang";
$nama = $_SESSION['masuk'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="halaman.css">
  <title>TOP UP ATMA</title>
</head>

<body>
  <div class="kuliah">
    <div class="menu">


      <img src="gambar/gambar 6.png" alt="api" />
      <h1>TOP UP ATMA</h2>



      <button class="menu-satu"><a href="profil.php">PROFIL</a></button>
      <!-- <button class="menu-dua"><a href="logout.php">KELUAR</a></button> -->
      <button class="menu-tiga"><a href="logout.php">KELUAR</a></button>
      <button><a href="hasilbelanja.php">HASIL</a></button>
      <!-- <button class="menu-empat"><a href="register.php">REGISTER</a></button> -->

    </div>
    <div class="kelas">
      <h1>selamat datang untuk <?php echo $nama?></h1>
      <img src="gambar/gambar 5.png" alt="hero" />
    </div>
    <h2>terpopuler :</h2>
    <div class="kelas-kedua">
      <div class="kedua-pertama">
        <img src="gambar/Logo mobile legends bang bang.jpg" alt="mobile legend" />
        <h3>MOBILE LEGEND</h3>
        <button><a href="ml.php">TOP UP</a></button>
      </div>
      <div class="kedua-kedua">
        <img src="gambar/PUBG Icon.jpg" alt="PUBG" />
        <h3>PBUG MOBILE</h3>
        <button>TOP UP</button>
      </div>
      <div class="kedua-ketiga">
        <img src="gambar/VALORANT.png" alt="valorant" />
        <h3>VALORANT</h3>
        <button>TOP UP</button>
      </div>
      <div class="kedua-keempat">
        <img src="gambar/Free Fire.jpg" alt="free fire" />
        <h3>FREE FIRE</h3>
        <button>TOP UP</button>
      </div>
    </div>
  </div>
</body>

</html>