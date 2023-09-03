<?php 

include("koneksi.php");

$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$email= $_POST['email'];
$nomor= $_POST['nomor'];
$username= $_POST['username'];
$password= $_POST['password'];

$insert = mysqli_query($koneksi,"INSERT INTO register set nama='$nama',alamat='$alamat',email='$email',nomor='$nomor',username='$username', passwor='$password'");

if($insert){
    echo "<script>alert('Data anda berhasil diinput');window.location='register.php'</script>";
}
else{
    echo "input gagal";
}

?>