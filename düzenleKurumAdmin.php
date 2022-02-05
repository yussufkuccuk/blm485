<?php
include("layoutAdmin.php");
$id = $_GET['kartId'];
$_SESSION['kurum']=$id;
$query = mysqli_query($con, "select * from institutions where kurumId = '$id'");
$ogr = mysqli_fetch_assoc($query);
?>
<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="kurumDetailAdminTüm.php">Bir Önceki Sayfaya Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title">KURUM DÜZENLE</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="kurumDüzenleAdmin1.php">
                    <table>
                        <tr>
                            <td>
                                Kurumun Adı:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="kurumAd" placeholder="Kurumun Adı" value="' . $ogr['kurumAdı'] . '" required />';
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kurumun Adresi:
                            </td>
                            <td>
                                <?php
                                echo ' <input class="input--style-5" type="text" name="kurumAdres" placeholder="Kurumun Adresi" style=height:70px; value="' . $ogr['kurumAdresi'] . '" required/>';
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kurumun Bulunduğu İl:
                            </td>
                            <td>
                                <?php
                                echo '<input class="input--style-5" type="text" name="kurumIl" placeholder="Kurumun Bulunduğu İl" value="' . $ogr['kurumİli'] . '" required />';
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
