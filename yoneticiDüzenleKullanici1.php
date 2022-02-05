
<?php
session_start();
include("db.php");
if(!isset($_SESSION['kullaniciGirisi'])){
    header("Location:login.php");
}

if (isset($_REQUEST['tcKimlik']) && isset($_REQUEST['adi']) && isset($_REQUEST['soyadi']) 
&& isset($_REQUEST['kayitTarihi']) &&    isset($_REQUEST['user'])&&    isset($_REQUEST['yurt']) ) {
    $ıd = $_REQUEST['tcKimlik'];
    $sorgu = mysqli_query($con, "update admins set 
    TCKimlikNo='" . $_REQUEST['tcKimlik'] . "',
    Ad='" . $_REQUEST['adi'] . "',
    Soyad='" . $_REQUEST['soyadi'] . "',
    kayitTarihi='" . $_REQUEST['kayitTarihi'] . "',
    username='" . $_REQUEST['user'] . "',
    kurumId='" . $_REQUEST['yurt'] . "'
     where TCKimlikNo='$ıd'") or die("hata:kayıt işlemi gerçekleşemedi");

if($sorgu){
    header("Location:profileKullanici.php");
}
else{
    echo '<script>alert(\'Güncelleme Başarısız Oldu\')</script>';
}
    
}
?>

