<?php

include("db.php");
session_start();
if(!isset($_SESSION['adminGirisi'])){
    header("Location:login.php");
}


$id=$_GET['kartId'];
$sorgu=mysqli_query($con,"Delete  from institutions where kurumId='$id'") or die("Kayıt silinemedi");
echo '<script>alert(\'Kayıt Başarılıyla Silindi\')</script>';   
header("Location:kurumDetailAdminTüm.php");


?>