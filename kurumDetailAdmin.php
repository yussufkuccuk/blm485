<?php
include("layoutAdmin.php")
?>

<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="kurumDetailAdminTüm.php">Bir Önceki Sayfaya Dön Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title ">KURUM BİLGİLERİ</h2>
            </div>
            <div class="card-body">
                <form>
                    <table>
                        <?php
                        $id = $_GET['kartId'];
                        $sorgu = mysqli_query($con, "select * from institutions where kurumId= '$id'");
                        $str = mysqli_fetch_assoc($sorgu);
                        $kurumAd = $str['kurumAdı'];
                        $kurumAdres = $str['kurumAdresi'];
                        $kurumIl = $str['kurumİli'];
                        echo "
                    <tr>
                        <td>
                            <label class=label >Kurumun Adı:   </label>
                        </td>
                        <td>
                            <label class=label--block style=margin-left:10px;margin-bottom:10px>$kurumAd</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class=label >Kurumun Adresi:</label>
                        </td>
                        <td>
                        <label class=label--block style=margin-left:10px;margin-bottom:10px>$kurumAdres</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class=label >Kurumun Bulunduğu İl:</label>
                        </td>
                        <td>
                        <label class=label--block style=margin-left:10px>$kurumIl</label>
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
include("layoutFooterAdmin.php")
?>