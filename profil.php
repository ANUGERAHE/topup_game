<?php 
include 'koneksi.php';

session_start();

if($_SESSION['status'] !="login"){
  header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>TOP UP ATMA</title>
</head>
<body >
    <div class="host">
        <h1>UPDATE DATA ANDA</h1>
        <div class="host-pertama">
           <form action="update.php" method="post">

               <input type="text" placeholder="NAMA LENGKAP" name="nama" required><br>
               <input type="text" placeholder="ALAMAT" name="alamat" required><br>
               <input type="email" placeholder="EMAIL" name=email required><br>
               <input type="number" placeholder="NO.HANDPHONE" name="nomor" required><br>
               <input type="text" placeholder="USERNAME" name="username" required><br>
               <input type="password" placeholder="PASSWORD" name="password" required><br>
               <input type="password" placeholder="PASSWORD BARU" name="baru" required><br> 
               <button type="submit">UPDATE</button>
               <button type="submit"><a href="halaman.php">KEMBALI</a></button>
       
           </form>


        </div>

    </div>
</body>
</html>