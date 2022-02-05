

<?php

include("db.php");
session_start();
if(!isset($_SESSION['adminGirisi'])){
    header("Location:login.php");
}
  
  if(isset($_REQUEST['tcKimlik']) && isset($_REQUEST['adi']) && isset($_REQUEST['soyadi']) && isset($_REQUEST['role'])
  && isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['kurum'])){
    $tc=$_REQUEST['tcKimlik'];
    $ad=$_REQUEST['adi'];
    $soyad=$_REQUEST['soyadi'];
    $rol=$_REQUEST['role'];
    $user=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    $kur=$_REQUEST['kurum'];
    date_default_timezone_set('Europe/Istanbul');
    $kayit=date("Y-m-d H:i:s", time());
    $x=mysqli_query($con,"select * from roles where name=$rol");
    $sonuc=mysqli_fetch_assoc($x);
    $y=mysqli_query($con,"select * from institutions where kurumAdı=$kur");
    $kurum=mysqli_fetch_assoc($y);

    $kaydet=mysqli_query($con,"insert into admins (id,TCKimlikNo,Ad,Soyad,KayitTarihi,role,username,password,kurumId) values 
    (NULL,'$tc','$ad','$soyad','$kayit','$rol','$user','$pass','$kur')") 
    or die('<script>alert(\'Kayıtlı Yönetici Girdiniz\'); window.location.href="yoneticiEkleAdmin.php";</script>');

    if($kaydet){

        header("Location:yoneticiDetailAdminTüm.php");
    }
    else{
         
echo '<script>alert(\'Kayıt Başarılı Değil\'); </script>';

    }
}
?>