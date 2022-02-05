<?php
include("layoutAdmin.php")
?>
<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="anasayfaAdmin.php">Anasayfaya Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title">YÖNETİCİ EKLE</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="yoneticiEkleAdmin1.php">
                    <table>
                        <tr>
                            <td>
                                Yöneticinin TC Kimlik Numarası:
                            </td>
                            <td>
                                <input class="input--style-5" type="text" name="tcKimlik" placeholder="Yöneticinin TC Kimlik No" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Adı:
                            </td>
                            <td>
                                <input class="input--style-5" type="text" name="adi" placeholder="Yöneticinin Adı" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Soyadı:
                            </td>
                            <td>
                                <input class="input--style-5" type="text" name="soyadi" placeholder="Yöneticinin Soyadı" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Kullanıcı Adı:
                            </td>
                            <td>
                                <input class="input--style-5" type="text" name="username" placeholder="Yöneticinin Kullanıcı Adı" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Şifresi:
                            </td>
                            <td>
                                <input class="input--style-5" type="password" name="password" placeholder="Yöneticinin Şifresi" required />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Yöneticinin Rolü:
                            </td>
                            <td>
                                <?php
                                $query = mysqli_query($con, "select * from roles");
                                $html = '<select class="input--style-5" name="role" style=width:330px><option value="0">Yöneticinin rolünü seçiniz</option>';
                                while ($str = mysqli_fetch_assoc(($query))) {
                                    $html = $html . '<option value="' . $str['id'] . '">' . $str['name'] . '</option>';
                                }
                                $html = $html . "</select>";
                                echo $html;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Yöneticinin Kurumu:
                            </td>
                            <td>
                                <?php
                                $query = mysqli_query($con, "select * from institutions");
                                $html = '<select class="input--style-5" name="kurum"><option value="0">Yöneticinin kurumunu seçiniz</option>
                                <option value="1"></options>';
                                while ($str = mysqli_fetch_assoc(($query))) {
                                    $html = $html . '<option value="' . $str['kurumId'] . '">' . $str['kurumAdı'] . '</option>';
                                }
                                $html = $html . "</select>";
                                echo $html;
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input class="btn btn--radius-2 btn--blue" type="submit" name="Kaydet" value="KAYDET" style="width:110px">
                                <input class="btn btn--radius-2 btn--blue" type="reset" name="Temizle" value="TEMİZLE" style="width:110px">
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include("layoutFooterAdmin.php")
?>