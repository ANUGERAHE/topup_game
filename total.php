<?php  

include "koneksi.php";

$id = $_POST['id'];
$bank = $_POST['bank'];
$diamond = $_POST['diamond'];
$total = $_POST['total'];
$user = $_POST['user'];

$input = mysqli_query($koneksi,"INSERT INTO hasil SET id_game= '$id',bank= '$bank',diamond= '$diamond',total= '$total',user = '$user'");


if($input){
    echo "<script>alert('Anda berhasil membayar');window.location='selesai.php'</script>";
}
else{
    echo "input gagal";
}

?>