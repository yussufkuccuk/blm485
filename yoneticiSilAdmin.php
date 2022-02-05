<?php
session_start();
include("db.php");
if(!isset($_SESSION['adminGirisi'])){
    header("Localhost:login.php");
}


$id=$_GET['kartId'];
$sorgu=mysqli_query($con,"Delete  from admins where id='$id'") or die("Kayıt silinemedi");
echo '<script>alert(\'Kayıt Başarılıyla Silindi\')</script>';   
header("Location:yoneticiDetailAdminTüm.php");


?>