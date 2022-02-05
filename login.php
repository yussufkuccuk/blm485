<!DOCTYPE html>
<html lang="en">

<head>
    <title>TAKİP SİSTEMİ-TAKSİS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/card-id.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <form class="login100-form validate-form" method="POST" action="">
            <div class="container-login100">

                <div class="wrap-login100 p-l-50 p-r-50  p-b-10">
                    <span class="login100-form-title ">
                        <img src="images/icons/card-id.png" height="100" width="100"><br>
                        Takip Sistemi
                    </span>
                    <div class="container-log">
<br><br><br><br>
                        <!--span class="login100-form-title p-b-55">
                            Login
                        </span-->

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Kullanıcı Adı Zorunlu">
                            <input class="input100" type="text" name="userName" placeholder="Kullanıcı Adı">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-user"></span>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Şifre Zorunlu">
                            <input class="input100" type="password" name="password" placeholder="Şifre">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-lock"></span>
                            </span>
                        </div>

                        <label style="color:red;">
                            <?php
                            session_start();
                            if (isset($_REQUEST['userName']) && isset($_REQUEST['password'])) {
                                $con = mysqli_connect("localhost", "root", "", "takipsistemi");

                                if (mysqli_connect_errno()) {
                                    echo "Failed to connect to mysql:" . $_myqsli_connect_error();
                                } else {
                                    $kullanici = $_REQUEST['userName'];
                                    $sifre = $_REQUEST['password'];
                                    mysqli_set_charset($con, "utf8");
                                    $sorgu = mysqli_query($con, "select * from admins where username='$kullanici' && password='$sifre'") or die("hata oluştu");
                                    $str = mysqli_fetch_array($sorgu);
                                    if ($str != null) {
                                       
                                        if ($str['role'] == 1) {
                                            header('Location:anasayfaAdmin.php');
                                            $_SESSION['adminGirisi'] = true;
                                            $_SESSION['adminId'] = $str['id'];
                                        }
                                        
                                        if ($str['role'] == 2) {
                                            header('Location:anasayfaKullanici.php');
                                            $_SESSION['kullaniciGirisi'] = true;
                                            $_SESSION['kullaniciId'] = $str['id'];
                                        }

                                    } else {
                                        echo "Kullanıcı adı veya şifre hatalı.";
                                    }
                                }
                            }
                            ?>
                        </label>

                        <div class="container-login100-form-btn ">
                            <button class="login100-form-btn" name="login">
                                GİRİŞ YAP
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>