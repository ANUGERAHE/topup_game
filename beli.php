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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css">
    <title>TOP UP ATMA</title>
</head>

<body>
    <div class="menu">
        <img src="gambar/gambar 6.png" alt="api" />
        <h1>TOP UP ATMA</h1>
        <button class="menu-satu"><a href="login.html">LOGIN</a></button>
        <button ><a href="logout.php">KELUAR</a></button>
        <button><a href="hasilbelanja.php">HASIL</a></button>
    </div>
    <div class="rumah">
        <h1>Bayar Game Mu</h1>
        <div class="host-pertama">
            <form action="hasilbeli.php" method="post">
                <div class="kuliah">

                    <input type="text"id= "ID" name= "ID"placeholder="ID GAME" required >
                    <input type="text" name="user" placeholder="user" id= "user" value="<?php echo $nama?>"required>
                    <input type="text" placeholder="VOUCHER" id="VOUCHER" name="VOUCHER">
                    <select name="bank" id="bank" name= "bank" required>
                        <option>Pilih Metode Pembayaran</option>
                        <option>BNI (Bank Negara Indonesia)</option>
                        <option>BRI (Bank Repuplik Indonesia)</option>
                        <option>BCA (Bank Central Asia)</option>
                        <option>Danamon</option>
                    </select>
                    <input type="text" id="Bayar" name= "Bayar" placeholder="Diamond" required>
                    <button id="tombol">CEK HARGA</button>
            </form>
        </div>


    </div>
</body>

</html>