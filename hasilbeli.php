<?php 
$ID = $_POST['ID'];
$VOUCHER = $_POST['VOUCHER'];
$BANK = $_POST['bank'];
$BAYAR = $_POST['Bayar'];
$USER = $_POST['user'];


if($VOUCHER == 'topupatma'){
    $TOTAL = $BAYAR * 2000 - 2000;
}
else{
    
    $TOTAL = $BAYAR * 2000;
}

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="baru.css">
    <title>Document</title>
</head>
<body>
<div class="menu">
        <img src="gambar/gambar 6.png" alt="api" />
        <h1>TOP UP ATMA</h1>
        <button class="menu-satu"><a href="profil.php">PROFIL</a></button>
        <button ><a href="logout.php">KELUAR</a></button>
        <button><a href="hasilbelanja.php">HASIL</a></button>
    </div>
    <div class="rumah">
        <!-- <h2>Bayar Game Mu</h2> -->
        <div class="host-pertama">
           <form action="total.php" method="post">

               <div class="kuliah">
                   <h1>KONFIRMASI PESANAN ANDA</h1>
                  ID_GAME <input type="text" name="id" id="id"  value="<?php echo $ID?>">
                   USER <input type="text" name="user" id="user"  value="<?php echo $USER?>">
                   BANK <input type="text" name="bank" id="bank"  value="<?php echo $BANK?>">
                   DIAMOND <input type="text" name="diamond" id="berlian"  value="<?php echo $BAYAR?>">
                   REKENING <input type="text" id="rekening" disabled value="19553989">
                   <input type="file" id="file">
                   <!-- <h4>NOMOR REKENING : 12344555</h4> -->
                   <h4>TOTAL :</h4>
                   <input type="text" name="total" id="total"  value="Rp <?php echo $TOTAL?>">
                   <button id="tombol" name="tombol">Bayar</button>
           </form>
            
        </div>


    </div>
</body>
</html>