
 <?php
 session_start();
    include("db.php");
    
    if (!isset($_SESSION['kullaniciGirisi'] )) {
        header("Location:login.php");
    }

    if (
        isset($_REQUEST['kart']) && isset($_REQUEST['adi']) && isset($_REQUEST['soyadi']) && isset($_REQUEST['tcKimlik']) &&
        isset($_REQUEST['telefon']) && isset($_REQUEST['adres']) && isset($_REQUEST['anneAdi']) && isset($_REQUEST['anneCep']) &&
        isset($_REQUEST['babaAdi']) && isset($_REQUEST['babaCep']) && isset($_REQUEST['dogumTarihi']) && isset($_REQUEST['dogumYeri']) &&
        isset($_REQUEST['odaNo']) && isset($_REQUEST['yurt']) && isset($_REQUEST['Kaydet'])
    ) {

        $sorgu = mysqli_query($con, "insert into students1 (kartId,TCKimlikNo,Ad,Soyad,ogrTel,DogumTarihi,
             dogumYeri,anneAd,anneTel,babaAd,babaTel,evAdresi,odaNo,kurumId) values('" . $_REQUEST['kart'] . "','" . $_REQUEST['tcKimlik'] . "','" . $_REQUEST['adi'] . "','" . $_REQUEST['soyadi'] . "',
             '" . $_REQUEST['telefon'] . "','" . $_REQUEST['dogumTarihi'] . "','" . $_REQUEST['dogumYeri'] . "','" . $_REQUEST['anneAdi'] . "','" . $_REQUEST['anneCep'] . "',
             '" . $_REQUEST['babaAdi'] . "','" . $_REQUEST['babaCep'] . "','" . $_REQUEST['adres'] . "','" . $_REQUEST['odaNo'] . "','" . $_REQUEST['yurt'] . "') ")
            or die('<script>alert(\'Kayıtlı Öğrenci Girdiniz\'); window.location.href="ogrenciEkleKullanici.php";</script>');

        //echo '<script>alert(\'Kayıt Başarılı\')</script>';
        if ($sorgu) {
            header("Location:ogrenciDetailKullaniciTüm.php");
        }
    }
    ?>
 