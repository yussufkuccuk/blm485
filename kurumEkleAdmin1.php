
<?php
session_start();
include("db.php");
if (!isset($_SESSION['adminGirisi'])) {
  header("location:login.php");
}

if (isset($_REQUEST['kurumAd']) && isset($_REQUEST['kurumAdres']) && isset($_REQUEST['kurumIl'])) {
  $ad = $_REQUEST['kurumAd'];
  $adres = $_REQUEST['kurumAdres'];
  $il = $_REQUEST['kurumIl'];
  $query = mysqli_query($con, "select * from institutions");
  while ($str = mysqli_fetch_array($query)) {
    if ($str['kurumAdı'] = $ad) {
      //echo "Kayıtlı kurum girdiniz.";
      echo '<script>alert(\'Kayıtlı Kurum Girdiniz\')</script>';
      break;
    }
  }
  $kaydet = mysqli_query($con, "insert into institutions (kurumId,kurumAdı,kurumAdresi,kurumİli) values (NULL,'" . $ad . "','" . $adres . "','" . $il . "')")
    or die("hata:kayıt işlemi gerçekleşemedi");

  if ($kaydet) {

    header("Location:kurumDetailAdminTüm.php");
  }

  //echo '<script>alert(\'Kayıt Başarılı\')</script>';


}

?>