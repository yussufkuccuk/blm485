<?php
session_start();
if(!isset($_SESSION['kullaniciGirisi'])){
    header("Location:login.php");
}
include("db.php");


$id=$_GET['kartId'];
$sorgu=mysqli_query($con,"Delete  from students1 where kartId='$id'") or die("Kayıt silinemedi");
echo '<script>alert(\'Kayıt Başarılıyla Silindi\')</script>';   
header("Location:ogrenciDetailKullaniciTüm.php");


?>