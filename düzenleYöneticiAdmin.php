<?php
include("layoutAdmin.php");
$id = $_GET['kartId'];
$query = mysqli_query($con, "select * from admins where id = '$id'");
$ogr = mysqli_fetch_assoc($query);
$sor=mysqli_query($con,"select * from institutions where kurumId='".$ogr['kurumId']."'");
$kur=mysqli_fetch_array($sor);
?>
<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="yoneticiDetailAdminTüm.php">Bir Önceki Sayfaya Dön Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title">YÖNETİCİ DÜZENLE</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="yoneticiDüzenleAdmin1.php">
                    <table>
                        <tr>
                            <td>
                                Yöneticinin TC Kimlik Numarası:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="tcKimlik" placeholder="Yöneticinin TC Kimlik No" value="' . $ogr['TCKimlikNo'] . '" required />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Adı:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="adi" placeholder="Yöneticinin Adı" value="' . $ogr['Ad'] . '" required />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Soyadı:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="soyadi" placeholder="Yöneticinin Soyadı" value="' . $ogr['Soyad'] . '" required />';
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Yöneticinin Kayıt Tarihi:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="datetime" name="kayitTarihi" placeholder="Yöneticinin Kayıt Tarihi" value="' . $ogr['kayitTarihi'] . '" required/>';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kullanıcı Adı:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="user" placeholder="Kullanıcı Adı" value="' . $ogr['username'] . '" required />';
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                Yöneticinin Kurumu:
                            </td>
                            <td>
                                <?php
                                $sor1=mysqli_query($con,"select * from institutions ");
                                echo '<select class=input--style-5 name="yurt" >
                                <option value='.$kur['kurumId'].'  >'.$kur['kurumAdı'].'</option>';
                                while( $kur1=mysqli_fetch_array($sor1)){
                                    echo '<option value='.$kur1['kurumId'].' >'.$kur1['kurumAdı'].'</option>';
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
