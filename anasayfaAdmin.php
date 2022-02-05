<?php
include("layoutAdmin.php")
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div>
        <br>
        <!-- Content Row -->
        <div class="row" style="text-align:center">

          <!-- Earnings (Monthly) Card Example -->
          <?php if (!isset($_POST["gönder"])) {
          ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="kurumDetailAdminTüm.php">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Toplam Kurum Sayısı</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $var = 0;
                          $sorgu = mysqli_query($con, "Select * from institutions ");
                          while ($str = mysqli_fetch_array($sorgu)) { //mysqli_fetch_assoc($sorgu)
                            $var += 1;
                          }
                          echo $var;
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-landmark fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="ogrenciDetailAdminTüm.php">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Toplam Öğrenci Sayısı</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $var = 0;
                          $sorgu = mysqli_query($con, "Select * from students1 ");
                          while ($str = mysqli_fetch_array($sorgu)) { //mysqli_fetch_assoc($sorgu)
                            $var += 1;
                          }
                          echo $var;
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="ogrenciHataliAdmin.php">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Hatalı Giriş-Çıkış</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $var = 0;
                          $sorgu = mysqli_query($con, "Select * from studentlogs where alarm='1' ");
                          while ($str = mysqli_fetch_array($sorgu)) { //mysqli_fetch_assoc($sorgu)
                            $var += 1;
                          }
                          echo $var;
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-exclamation fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php
          }
          if (isset($_REQUEST['search']) && isset($_POST["gönder"]) == 1 && isset($_POST["gönder"]) == "Gönder") {
            $value = $_REQUEST['search'];
            $islem = $_REQUEST['islem'];
            $tür = $_REQUEST['tablo'];
            if ($value != "" && $islem == "1" && $tür == "1") {
              $sorgu = mysqli_query($con, "Select * from students1 where TCKimlikNo='$value'");
              echo '<table class="table table-striped"  >
                                <thead class="thead-dark">
                                  <tr>    
                                    <th> KartId</th>
                                    <th> TC Kimlik No</th>
                                    <th> Ad</th>
                                    <th> Soyad</th>
                                    <th> </th>
                                    <th> İşlemler</th>
                                    <th> </th>
                                    <th> </th>
                                  </tr>
                                </thead>';
              while ($str = mysqli_fetch_array($sorgu)) { //mysqli_fetch_assoc($sorgu)
                echo '<tr>    
                                <td>' . $str['kartId'] . '</td>
                                <td>' . $str['TCKimlikNo'] . '</td>
                                <td>' . $str['Ad'] . '</td>
                                <td>' . $str['Soyad'] . '</td>
                                <td><a class=btn brn-primary style=color:blue href=düzenleOgrenciAdmin.php?kartId=' . $str['kartId'] . ' role=button>Düzenle</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciDetailAdmin.php?kartId=' . $str['kartId'] . ' role=button>Detay</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciSilAdmin.php?kartId=' . $str['kartId'] . ' role=button>Sil</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciLogAdmin.php?kartId=' . $str['kartId'] . ' role=button>Hareketler</a></td>
                            </tr>';
              }
              echo '</table>';
            } elseif ($value != "" && $islem == "2" && $tür == "1") {
              $sorgu = mysqli_query($con, "Select * from students1 where Ad like N'%$value%'");
              echo '<table class="table table-striped"  >
                                <thead class="thead-dark">
                                  <tr>    
                                    <th> KartId</th>
                                    <th> TC Kimlik No</th>
                                    <th> Ad</th>
                                    <th> Soyad</th>
                                    <th> </th>
                                    <th> İşlemler</th>
                                    <th> </th>
                                    <th> </th>
                                  </tr>
                                </thead>';
              while ($str = mysqli_fetch_array($sorgu)) { //mysqli_fetch_assoc($sorgu)
                echo '<tr>    
                                <td>' . $str['kartId'] . '</td>
                                <td>' . $str['TCKimlikNo'] . '</td>
                                <td>' . $str['Ad'] . '</td>
                                <td>' . $str['Soyad'] . '</td>
                                <td><a class=btn brn-primary style=color:blue href=düzenleOgrenciAdmin.php?kartId=' . $str['kartId'] . ' role=button>Düzenle</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciDetailAdmin.php?kartId=' . $str['kartId'] . ' role=button>Detay</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciSilAdmin.php?kartId=' . $str['kartId'] . ' role=button>Sil</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciLogAdmin.php?kartId=' . $str['kartId'] . ' role=button>Hareketler</a></td>
                            </tr>';
              }
              echo '</table>';
            } elseif ($value != "" && $islem == "3" && $tür == "2") {
              $sorgu = mysqli_query($con, "Select * from institutions where kurumAdı like N'%$value%'");
              echo '<table class="table table-striped"  >
                                <thead class="thead-dark">
                                  <tr>    
                                    <th> Kurum Adı</th>
                                    <th> Kurum Adresi</th>
                                    <th> Kurum İli</th>
                                    <th> </th>
                                    <th> İşlemler</th>
                                    <th> </th>
                                    <th> </th>
                                  </tr>
                                </thead>';
              while ($str = mysqli_fetch_array($sorgu)) { //mysqli_fetch_assoc($sorgu)
                echo '<tr>    
                                <td>' . $str['kurumAdı'] . '</td>
                                <td>' . $str['kurumAdresi'] . '</td>
                                <td>' . $str['kurumİli'] . '</td>
                                <td><a class=btn brn-primary style=color:blue href=düzenleKurumAdmin.php?kartId=' . $str['kurumId'] . ' role=button>Düzenle</a></td>
                                <td><a class=btn brn-primary style=color:blue href=KurumDetailAdmin.php?kartId=' . $str['kurumId'] . ' role=button>Detay</a></td>
                                <td><a class=btn brn-primary style=color:blue href=KurumSilAdmin.php?kartId=' . $str['kurumId'] . ' role=button>Sil</a></td>
                            </tr>';
              }
              echo '</table>';
            } elseif ($value != "" && $islem == "1" && $tür == "3") {
              $sorgu = mysqli_query($con, "Select * from admins where TCKimlikNo = '$value'");
              echo '<table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">TC Kimlik No</th>
                  <th scope="col">Adı</th>
                  <th scope="col">Soyadı</th>
                  <th scope="col">Kayıt Tarihi</th>
                  <th scope="col">Rolü</th>
                  <th scope="col">İşlem</th>
                </tr>
              </thead>';
              while ($str = mysqli_fetch_array($sorgu)) {
                $adminId = $str['id'];
                $tc = $str['TCKimlikNo'];
                $ad = $str['Ad'];
                $soyad = $str['Soyad'];
                $kayıt = $str['kayitTarihi'];
                $rol = $str['role'];
                $x = mysqli_query($con, "select * from roles where id='$rol'");
                $rolee = mysqli_fetch_assoc($x);
                $rol = $rolee['name'];
                echo "  
   <tbody>
     <tr class=table-active>
       <td>$tc</td>
       <td>$ad</td>
       <td>$soyad</td>
       <td>$kayıt</td>
       <td>$rol</td>
       <td><a class=btn brn-primary href=düzenleYöneticiAdmin.php?kartId=$adminId role=button>Düzenle</a></td>
       <td><a class=btn brn-primary href=yoneticiDetailAdmin.php?kartId=$adminId role=button>Detay</a></td>
       <td><a class=btn brn-primary href=# role=button data-toggle=modal data-target=#logoutModal1>Sil</a></td>
     </tr>
   </tbody> ";
              }
              echo '</table>';
            } elseif ($value != "" && $islem == "2" && $tür == "3") {
              $sorgu = mysqli_query($con, "Select * from admins where Ad like N'%$value%'");
              echo '<table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">TC Kimlik No</th>
                  <th scope="col">Adı</th>
                  <th scope="col">Soyadı</th>
                  <th scope="col">Kayıt Tarihi</th>
                  <th scope="col">Rolü</th>
                  <th scope="col">İşlem</th>
                </tr>
              </thead>';
              while ($str = mysqli_fetch_array($sorgu)) {
                $adminId = $str['id'];
                $tc = $str['TCKimlikNo'];
                $ad = $str['Ad'];
                $soyad = $str['Soyad'];
                $kayıt = $str['kayitTarihi'];
                $rol = $str['role'];
                $x = mysqli_query($con, "select * from roles where id='$rol'");
                $rolee = mysqli_fetch_assoc($x);
                $rol = $rolee['name'];
                echo "   
   <tbody>
     <tr class=table-active>
       <td>$tc</td>
       <td>$ad</td>
       <td>$soyad</td>
       <td>$kayıt</td>
       <td>$rol</td>
       <td><a class=btn brn-primary href=düzenleYöneticiAdmin.php?kartId=$adminId role=button>Düzenle</a></td>
       <td><a class=btn brn-primary href=yoneticiDetailAdmin.php?kartId=$adminId role=button>Detay</a></td>
       <td><a class=btn brn-primary href=# role=button data-toggle=modal data-target=#logoutModal1>Sil</a></td>
     </tr>
   </tbody> ";
              }
              echo '</table>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->
  <?php
  include("layoutFooterAdmin.php")
  ?>