<?php
include("layoutAdmin.php");
$id = $_GET['kartId'];
$query = mysqli_query($con, "select * from students1 where kartId = '$id'");
$ogr = mysqli_fetch_assoc($query);
$sor=mysqli_query($con,"select * from institutions where kurumId='".$ogr['kurumId']."'");
$kur=mysqli_fetch_array($sor);
?>
<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="ogrenciDetailAdminTüm.php">Bir Önceki Sayfaya Dön Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title">ÖĞRENCİ DÜZENLE</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="ogrenciDüzenleAdmin1.php">
                    <table>
                        <tr>
                            <td>
                                Öğrencinin Kart Numarası:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="kart" placeholder="Kart Numarasını Giriniz" value="' . $ogr['kartId'] . '" required />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Adı:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="adi" placeholder="Öğrencinin Adı" value="' . $ogr['Ad'] . '" required  />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Soyadı:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="soyadi" placeholder="Öğrencinin Soyadı" value="' . $ogr['Soyad'] . '" required />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin TC Kimlik Numarası:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="tcKimlik" placeholder="Öğrencinin TC Kimlik No" value="' . $ogr['TCKimlikNo'] . '" required />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Cep Telefonu:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="telefon" placeholder="Öğrencinin Cep Telefonu" value="' . $ogr['ogrTel'] . '" required/>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Ev Adresi:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" name="adres" placeholder="Ev Adresi" value="' . $ogr['evAdresi'] . '" required></input>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Anne Adı:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="anneAdi" placeholder="Anne Adı" value="' . $ogr['anneAd'] . '" required >';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Anne Cep Telefonu:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="anneCep" placeholder="Anne Cep No" value="' . $ogr['anneTel'] . '" required>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Baba Adı:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="babaAdi" placeholder="Baba Adı" value="' . $ogr['babaAd'] . '" required >';
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Baba Cep Telefonu:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="babaCep" placeholder="Baba Cep No" value="' . $ogr['babaTel'] . '" required>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Doğum Tarihi:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="date" name="dogumTarihi" placeholder="Doğum Tarihini Giriniz" value="' . $ogr['dogumTarihi'] . '" required >';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Doğum Yeri:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="dogumYeri" placeholder="Doğum Yerini Giriniz" value="' . $ogr['dogumYeri'] . '" required >';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Oda Numarası:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="odaNo" placeholder="Öğrencinin Oda Numarası" value="' . $ogr['odaNo'] . '"required>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Öğrencinin Kaldığı Yurt:
                            </td>
                            <td>
                                <?php
                                $sor1 = mysqli_query($con, "select * from institutions ");
                                echo '<select class=input--style-5 name="yurt" >
                                <option value=' . $kur['kurumId'] . ' >' . $kur['kurumAdı'] . '</option>';
                                while ($kur1 = mysqli_fetch_array($sor1)) {
                                    echo '<option value=' . $kur1['kurumId'] . ' >' . $kur1['kurumAdı'] . '</option>';
                                }
                                echo '</select>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="btn btn--radius-2 btn--blue" type="submit" name="Güncelle" value="Güncelle" style="width:110px">
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Content Wrapper -->

<?php
include("layoutFooterAdmin.php")
?>