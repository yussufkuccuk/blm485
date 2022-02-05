<html lang="en">
<?php
session_start();
include("db.php");
if (!isset($_SESSION['kullaniciGirisi'])) {
    header('Location:login.php');
}
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Takip Sistemi - Anasayfa</title>

  <!-- Custom fonts for this template-->
  <!--link href="fonts/font-awesome-4.7.0/css/all.min.css" rel="stylesheet" type="text/css"-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!--link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"-->

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/icons/card-id.png" />
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link href="css/ekle.css" rel="stylesheet" media="all">

     <!-- Icons font CSS-->
     <link href="vendor/ekle/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/ekle/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"-->

    <!-- Vendor CSS-->
    <link href="vendor/ekle/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/ekle/datepicker/daterangepicker.css" rel="stylesheet" media="all">
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="anasayfaKullanici.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TAKİP SİSTEMİ

                </div>

            </a>
            <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="anasayfaKullanici.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Anasayfa</span></a>
      </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                İşlemler
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <!--i class="lnr lnr-cog"></i-->
                    <i class="fas fa-user-graduate"></i>
                    <span>Öğrenci İşlemleri</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">İşlemler:</h6>
                        <a id="ekle" class="collapse-item" href="ogrenciEkleKullanici.php">Öğrenci Ekle</a>
                        <a class="collapse-item" href="ogrenciDetailKullaniciTüm.php">Öğrenci Bilgileri</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-landmark"></i>
                    <span>Kurum İşlemleri</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">İşlemler:</h6>
                        <!--a class="collapse-item" href="JavaScript:newPopup('kurumEkle.php');">Kurum Ekle</a>
                        <a class="collapse-item" href="JavaScript:newPopup('kurumSil.php');">Kurum Sil</a-->
                        <a class="collapse-item" href="düzenleKurumKullanici.php">Kurum Düzenle</a>
                        <a class="collapse-item" href="kurumDetailKullanici.php">Kurum Bilgileri</a>
                        <!--a class="collapse-item" href="JavaScript:newPopup('kurumBilgileri.php');">Kurum Bilgileri</a-->
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST" action="anasayfaKullanici.php">

                        <div class="input-group bg-light border-0 small">
                            <select name="islem" class="bg-light border-0 medium">
                                <option value="0">Arama Şekli</option>
                                <option value="1">TC Kimlik No</option>
                                <option value="2">İsim</option>

                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search" style="width: 300px">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" name="gönder">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" name="Gönder">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!--span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span-->
                                <i class="fas fa-user-circle fa-user-cog">
                                    <?php


                                    $index2id = $_SESSION['kullaniciId'];
                                
                                        mysqli_set_charset($con, "utf8");

                                        $sorgu = mysqli_query($con, "Select * from admins where id='$index2id'");
                                        $str = mysqli_fetch_array($sorgu);
                                        if ($str != null)
                                            echo $str['Ad'];
                                    
                                    ?>
                                </i>
                                <!--img class="img-profile rounded-circle " /*src="https://source.unsplash.com/QAB-WJcbgJk/60x60"*/-->

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profileKullanici.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!--a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div-->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Çıkış Yap
                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
