<?php

include "koneksi.php";



include 'koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php");
}
echo "hai selamat datang";


$nama = $_SESSION['masuk'];
$hasil = mysqli_query($koneksi, "SELECT id_game,bank,diamond,total FROM hasil WHERE user = '$nama'");
$result = mysqli_fetch_all($hasil, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="belanja.css">
    <title>Document</title>
</head>

<body>
    <div class="utama">

        <div class="menu">


            <img src="gambar/gambar 6.png" alt="api" />
            <h1>TOP UP ATMA</h2>



                <!-- <button class="menu-satu"><a href="profil.php">PROFIL</a></button> -->
                <!-- <button class="menu-dua"><a href="logout.php">KELUAR</a></button> -->
                <button class="menu-tiga"><a href="profil.php">PROFIL</a></button>
                <button class="menu-empat"><a href="logout.php">LOGOUT</a></button>
        </div>
        <div class="liat">

        <h1>DAFTAR TRANSAKSI</h1>

            <table border="1">
                <tr>
                    <th>id_game</th>
                    <th>bank</th>
                    <th>diamond</th>
                    <th>total</th>
                </tr>
                <?php foreach ($result as $results) : ?>
                    <tr>
                        <td><?php echo $results['id_game'] ?></td>
                        <td><?php echo $results['bank'] ?></td>
                        <td><?php echo $results['diamond'] ?></td>
                        <td><?php echo $results['total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>