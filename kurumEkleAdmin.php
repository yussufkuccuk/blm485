<?php
include("layoutAdmin.php")
?>

    <div class="page-wrapper p-t-45 p-b-50">
    <div style="padding-right: 20px;float:right"><a href="anasayfaAdmin.php">Anasayfaya Dön <i class="fas fa-arrow-circle-left"></i></a></div>
        <div class="wrapper wrapper--w680">
            <div class="card card-5">
                <div class="card-heading bg-gradient-primary">
                    <h2 class="title">KURUM EKLE</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="kurumEkleAdmin1.php">
                        <table>
                            <tr>
                                <td>
                                    Kurumun Adı:
                                </td>
                                <td>
                                    <input class="input--style-5" type="text" name="kurumAd" placeholder="Kurumun Adı" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kurumun Adresi:
                                </td>
                                <td>
                                <textarea class="input--style-5" name="kurumAdres" placeholder="Kurumun Adresi" style="width: 233px;" required></textarea>
                                    <!--input class="input--style-5" type="text" name="Adi" placeholder="Yöneticinin Adı" /-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kurumun Bulunduğu İl:
                                </td>
                                <td>
                                    <input class="input--style-5" type="text" name="kurumIl" placeholder="Kurumun İli" required/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input class="btn btn--radius-2 btn--blue" type="submit" name="Kaydet" value="Kaydet" style="width:110px">
                                    <input class="btn btn--radius-2 btn--blue" type="reset" name="Temizle" value="Temizle" style="width:110px">
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