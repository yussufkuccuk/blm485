

    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title ">KURUM BİLGİLERİ</h2>
            </div>
            <div class="card-body">
                <form>
                    <table>
                        <?php
                        $id = $_SESSION['kullaniciId'];
                        $query = mysqli_query($con, "select * from admins where id = '$id'");
                        $ogr = mysqli_fetch_assoc($query);
                        $x=$ogr['kurumId'];
                        $sorgu=mysqli_query($con,"select * from institutions where kurumId='$x'");
                        $kurum = mysqli_fetch_assoc($sorgu);
                        $kurumAd = $kurum['kurumAdı'];
                        $kurumAdres = $kurum['kurumAdresi'];
                        $kurumIl = $kurum['kurumİli'];
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

