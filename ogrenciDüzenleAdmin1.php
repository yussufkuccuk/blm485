
<?php
include("db.php");
session_start();
if(!isset($_SESSION['adminGirisi'])){
    header("Location:login.php");
}

if (
    isset($_REQUEST['kart']) && isset($_REQUEST['adi']) && isset($_REQUEST['soyadi']) && isset($_REQUEST['tcKimlik']) &&
    isset($_REQUEST['telefon']) && isset($_REQUEST['adres']) && isset($_REQUEST['anneAdi']) && isset($_REQUEST['anneCep']) &&
    isset($_REQUEST['babaAdi']) && isset($_REQUEST['babaCep']) && isset($_REQUEST['dogumTarihi']) && isset($_REQUEST['dogumYeri']) &&
    isset($_REQUEST['odaNo']) && isset($_REQUEST['yurt'])
) {
    $ıd = $_POST['kart'];
    echo '<script>alert(\'"'.$ıd.'"\')</script>';
    $sorgu = mysqli_query($con, "update  students1 set
     kartId='" . $ıd. "',
    TCKimlikNo='" . $_REQUEST['tcKimlik'] . "',
    Ad='" . $_REQUEST['adi'] . "',
    Soyad='" . $_REQUEST['soyadi'] . "',
    ogrTel='" . $_REQUEST['telefon'] . "',
    DogumTarihi='" . $_REQUEST['dogumTarihi'] . "',
    dogumYeri='" . $_REQUEST['dogumYeri'] . "',
    anneAd='" . $_REQUEST['anneAdi'] . "',
    anneTel='" . $_REQUEST['anneCep'] . "',
    babaAd='" . $_REQUEST['babaAdi'] . "',
    babaTel='" . $_REQUEST['babaCep'] . "',
    evAdresi='" . $_REQUEST['adres'] . "',
    odaNo='" . $_REQUEST['odaNo'] . "',
    kurumId='" . $_REQUEST['yurt'] . "' where kartId='$ıd'") or die("hata:kayıt işlemi gerçekleşemedi");
echo '<script>alert(\'Kayıt Başarıyla güncellendi\')</script>';
if($sorgu){
    header("Location:ogrenciDetailAdminTüm.php");
}
}
?>