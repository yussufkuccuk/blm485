
 <?php
    include("db.php");
    session_start();
    if (!isset($_SESSION['adminGirisi'])) {
        header("Location:login.php");
    }

    if (
        isset($_REQUEST['kart']) && isset($_REQUEST['adi']) && isset($_REQUEST['soyadi']) && isset($_REQUEST['tcKimlik']) &&
        isset($_REQUEST['telefon']) && isset($_REQUEST['adres']) && isset($_REQUEST['anneAdi']) && isset($_REQUEST['anneCep']) &&
        isset($_REQUEST['babaAdi']) && isset($_REQUEST['babaCep']) && isset($_REQUEST['dogumTarihi']) && isset($_REQUEST['dogumYeri']) &&
        isset($_REQUEST['odaNo']) && isset($_REQUEST['yurt']) && isset($_REQUEST['Kaydet'])
    ) {

        $query = mysqli_query($con, "select * from students1");
        $id = $_REQUEST['kart'];
        $flag = 0;
        while ($str = mysqli_fetch_array($query)) {
            if ($str['kurumId'] == $_REQUEST['yurt'] && $str['TCKimlikNo'] == $_REQUEST['tcKimlik']) {
                $flag = 1;
                break;
            }
        }

            $sorgu = mysqli_query($con, "insert into students1 (kartId,TCKimlikNo,Ad,Soyad,ogrTel,DogumTarihi,
             dogumYeri,anneAd,anneTel,babaAd,babaTel,evAdresi,odaNo,kurumId) values('" . $_REQUEST['kart'] . "','" . $_REQUEST['tcKimlik'] . "','" . $_REQUEST['adi'] . "','" . $_REQUEST['soyadi'] . "',
             '" . $_REQUEST['telefon'] . "','" . $_REQUEST['dogumTarihi'] . "','" . $_REQUEST['dogumYeri'] . "','" . $_REQUEST['anneAdi'] . "','" . $_REQUEST['anneCep'] . "',
             '" . $_REQUEST['babaAdi'] . "','" . $_REQUEST['babaCep'] . "','" . $_REQUEST['adres'] . "','" . $_REQUEST['odaNo'] . "','" . $_REQUEST['yurt'] . "') ")
                or die('<script>alert(\'Kayıtlı Öğrenci Girdiniz\'); window.location.href="ogrenciEkleAdmin.php";</script>');

        if ($sorgu) {
            header("Location:ogrenciDetailAdminTüm.php");
        }
    }



    ?>
 