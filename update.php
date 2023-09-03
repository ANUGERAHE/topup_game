<?php 

include("koneksi.php");

$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$email= $_POST['email'];
$nomor= $_POST['nomor'];
$username= $_POST['username'];
$password= $_POST['password'];
$baru= $_POST['baru'];

$update = mysqli_query($koneksi,"UPDATE register SET nama = '$nama',alamat = '$alamat',email = '$email',nomor = '$nomor',username = '$username',passwor = '$baru' WHERE passwor = '$password'");
  
if($update){
    echo "<script>alert('Data anda berhasil diinput');window.location='profil.php'</script>";
}
else{
    echo "input gagal";
}
?>