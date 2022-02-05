<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/profile.css" rel="stylesheet">
<?php

include("layoutKullanici.php");
?>
<?php

$index2id = $_SESSION['kullaniciId'];
$sorgu = mysqli_query($con, "Select * from admins where id='$index2id'");
$str = mysqli_fetch_array($sorgu);
if ($str != null)

    ?>
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php
                    echo $str['Ad'] . " " . $str['Soyad'];
                    ?>
                    </h5>
                    <h6>
                        <?php
                        $id = $str['kurumId'];
                        $querry = mysqli_query($con, "select * from institutions where kurumId='$id'");
                        $kur = mysqli_fetch_assoc($querry);
                        if ($id != null)
                            echo $kur['kurumAdı'] . " Yöneticisi";
                        else
                            echo "Yönetici";
                        ?>
                    </h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hakkında</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="düzenleYöneticiKullanici.php?kartId=<?php echo $index2id; ?>" class="profile-edit-btn" style="border: solid">Edit Profile</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kullanıcı Adı</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php
                                    echo $str['username'];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>TC Kimlik No</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php
                                    echo $str['TCKimlikNo'];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Ad</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php
                                    echo $str['Ad'];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Soyad</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php
                                    echo $str['Soyad'];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kayıt Tarihi</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php
                                    echo $str['kayitTarihi'];
                                    ?></p>
                            </div>
                        </div>
                        <?php
                        if ($id != null) {
                            echo '
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Yönetici Olduğu Kurum</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                     ' . $kur['kurumAdı'] . '
                                    </p>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
</div>
</form>
</div>
<?php
include("layoutFooterKullanici.php");
?>