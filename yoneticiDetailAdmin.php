<?php
include("layoutAdmin.php");

?>

<div class="page-wrapper  p-t-45 p-b-50">
<div style="padding-right: 20px;float:right"><a href="yoneticiDetailAdminTüm.php">Bir Önceki Sayfaya Dön Dön <i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="wrapper wrapper--w680">
        <div class="card card-5">
            <div class="card-heading bg-gradient-primary">
                <h2 class="title">YÖNETİCİ BİLGİLERİ</h2>
            </div>
            <div class="card-body">
                <form>
                    <table>
                        <?php
                        $id = $_GET['kartId'];
                        $sorgu = mysqli_query($con, "select * from admins where id= '$id'");
                        $str = mysqli_fetch_assoc($sorgu);
                        $id = $str['id'];
                        $tc = $str['TCKimlikNo'];
                        $ad = $str['Ad'];
                        $soyad = $str['Soyad'];
                        $kayıttarih = $str['kayitTarihi'];
                        $rol = $str['role'];
                        $user = $str['username'];
                        $pass = $str['password'];
                        $kurumid = $str['kurumId'];
                        $kurumadı=mysqli_query($con,"select * from institutions where kurumId='$kurumid'");
                        $kur=mysqli_fetch_assoc($kurumadı);
                        $role=mysqli_query($con,"select * from roles where id='$rol' ");
                        $rolAd=mysqli_fetch_assoc($role);
                        echo " 
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
                    <label class=label >Kayıt Tarihi:   </label>
                </td>
                <td>
                    <label class=label--block style=margin-left:10px;margin-bottom:10px>$kayıttarih</label>
                </td>
            </tr>
            <tr>
            <td>
                <label class=label >Rolü:   </label>
            </td>
            <td>
                <label class=label--block style=margin-left:10px;margin-bottom:10px>".$rolAd['name']."</label>
            </td>
        </tr>
        <tr>
        <td>
            <label class=label >Kullanıcı Adı:   </label>
        </td>
        <td>
            <label class=label--block style=margin-left:10px;margin-bottom:10px>$user</label>
        </td>
    </tr>
    <tr>
    <td>
        <label class=label >Şifresi:   </label>
    </td>
    <td>
        <label class=label--block style=margin-left:10px;margin-bottom:10px>$pass</label>
    </td>
</tr>
<tr>
<td>
    <label class=label >Kurumu:   </label>
</td>";
if($kurumid==null){
    echo "<td> <label class=label--block style=margin-left:10px;margin-bottom:10px>-</label></td>";
}
else{
    echo "<td>
    <label class=label--block style=margin-left:10px;margin-bottom:10px>".$kur['kurumAdı']."</label>
    
</td>
</tr>";
}
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