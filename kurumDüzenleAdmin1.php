
<?php
session_start();
include("db.php");
if(!isset($_SESSION['adminGirisi'])){
    header("location:login.php");
}

if (
    isset($_REQUEST['kurumAd']) && isset($_REQUEST['kurumAdres']) && isset($_REQUEST['kurumIl']) ) {
    $ıd = $_SESSION['kurum'];
    $sorgu=mysqli_query($con,"select * from institutions where ");
    $sorgu = mysqli_query($con, "update institutions set kurumId='$ıd',
    kurumAdı='" . $_REQUEST['kurumAd'] . "',
    kurumAdresi='" . $_REQUEST['kurumAdres'] . "',
    kurumİli='" . $_REQUEST['kurumIl'] . "' where kurumId=$ıd");

    echo '<script>alert(\'Kayıt Başarıyla güncellendi\')</script>';
    if($sorgu){
        header("location:kurumDetailAdminTüm.php");
    }
}
?>