<?php
include("layoutAdmin.php");
?>

<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="ogrenciDetailAdminTüm.php">Bir Önceki Sayfaya Dön Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title">ÖĞRENCİ BİLGİLERİ</h2>
            </div>
            <div class="card-body">
                <form>
                    <table>
                        <?php
                        $id = $_GET['kartId'];
                        $sorgu = mysqli_query($con, "select * from students1 where kartId= '$id'");
                        $str = mysqli_fetch_assoc($sorgu);
                        $kartid = $str['kartId'];
                        $tc = $str['TCKimlikNo'];
                        $ad = $str['Ad'];
                        $soyad = $str['Soyad'];
                        $ogrtel = $str['ogrTel'];
                        $dogumtarih = $str['dogumTarihi'];
                        $dogumyer = $str['dogumYeri'];
                        $annead = $str['anneAd'];
                        $annetel = $str['anneTel'];
                        $babaad = $str['babaAd'];
                        $babatel = $str['babaTel'];
                        $adres = $str['evAdresi'];
                        $odano = $str['odaNo'];
                        $kurum = $str['kurumId'];
                        $kurumadı=mysqli_query($con,"select * from institutions where kurumId='$kurum'");
                        $kur=mysqli_fetch_assoc($kurumadı);
                        echo "
                    <tr>
                        <td>
                            <label class=label >Kart Numarası:   </label>
                        </td>
                        <td>
                            <label class=label--block style=margin-left:10px;margin-bottom:10px>$kartid</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class=label >TC Kimlik No:</label>
                        </td>
                        <td>
                        <label class=label--block style=margin-left:10px;margin-bottom:10px>$tc</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class=label >Adı:</label>
                        </td>
                        <td>
                        <label class=label--block style=margin-left:10px>$ad</label>
                            </td>
                    </tr>
                    <tr>
                    <td>
                        <label class=label >Soyadı:   </label>
                    </td>
                    <td>
                        <label class=label--block style=margin-left:10px;margin-bottom:10px>$soyad</label>
                    </td>
                </tr>
                <tr>
                <td>
                    <label class=label >Öğrencinin Telefonu:   </label>
                </td>
                <td>
                    <label class=label--block style=margin-left:10px;margin-bottom:10px>$ogrtel</label>
                </td>
            </tr>
            <tr>
            <td>
                <label class=label >Doğum Tarihi:   </label>
            </td>
            <td>
                <label class=label--block style=margin-left:10px;margin-bottom:10px>$dogumtarih</label>
            </td>
        </tr>
        <tr>
        <td>
            <label class=label >Doğum Yeri:   </label>
        </td>
        <td>
            <label class=label--block style=margin-left:10px;margin-bottom:10px>$dogumyer</label>
        </td>
    </tr>
    <tr>
    <td>
        <label class=label >Anne Adı:   </label>
    </td>
    <td>
        <label class=label--block style=margin-left:10px;margin-bottom:10px>$annead</label>
    </td>
</tr>
<tr>
<td>
    <label class=label >Anne Telefonu:   </label>
</td>
<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>$annetel</label>
</td>
</tr>
<tr>
<td>
    <label class=label >Baba Adı:   </label>
</td>
<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>$babaad</label>
</td>
</tr>
<tr>
<td>
    <label class=label >Baba Telefonu:   </label>
</td>
<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>$babatel</label>
</td>
</tr>
<tr>
<td>
    <label class=label >Ev Adresi:   </label>
</td>
<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>$adres</label>
</td>
</tr>
<tr>
<td>
    <label class=label >Oda Numarası:   </label>
</td>
<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>$odano</label>
</td>
</tr>
<tr>
<td>
    <label class=label >Kurumun Adı:   </label>
</td>
<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>".$kur['kurumAdı']."</label>
</td>
</tr>";
                        ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("layoutFooterAdmin.php");
?>