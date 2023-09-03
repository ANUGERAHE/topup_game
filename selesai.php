<?php 
include 'koneksi.php';

session_start();

if($_SESSION['status'] !="login"){
  header("location:login.php");
}
echo "hai selamat datang";
$nama = $_SESSION['masuk'];
$mt_rand = mt_rand(1000,10000);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="selesai.css">
    <title>Document</title>
</head>
<body>
    <div class="rumah">

        <div class="menu">
            <img src="gambar/gambar 6.png" alt="api" />
            <h1>TOP UP ATMA</h1>
            <button class="menu-satu"><a href="profil.php">PROFIL</a></button>
            <button class="menu-dua"><a href="logout.php">KELUAR</a></button>
          </div>
        <div class="utama">
            <img src="gambar/gambar 5.png" alt="hero">
            <h1>TERIMA KASIH TELAH TOP UP DI ATMA</h1>
            <h2>TUKARKAN CODE INI <?php echo $mt_rand?></h2>
            <button><a href="halamanutma.php">KEMBALI</a></button>
        </div>
        
        
    </div>
</body>
</html>