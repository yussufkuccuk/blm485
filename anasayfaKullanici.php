<?php
include("layoutKullanici.php")
?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div>
        <!-- Content Row -->
        <div class="row" style="text-align:center;padding-left:100px">
          <?php if (!isset($_POST["gönder"])) include("dashboardKullanici.php"); ?>
        </div>
        <!-- End of Main Content -->
        <?php
        if (isset($_REQUEST['search']) && isset($_POST["gönder"]) == 1 && isset($_POST["gönder"]) == "Gönder") {
          $value = $_REQUEST['search'];
          $islem = $_REQUEST['islem'];
          $id = $_SESSION['kullaniciId'];
          $query = mysqli_query($con, "select * from admins where id=$id");
          $srt = mysqli_fetch_array($query);
          if ($value != "" && $islem == "1") {

            $sorgu = mysqli_query($con, "Select * from students1 where TCKimlikNo='$value' && kurumId='" . $srt['kurumId'] . "' ");
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
                                <td><a class=btn brn-primary style=color:blue href=düzenleOgrenciKullanici.php?kartId=' . $str['kartId'] . ' role=button>Düzenle</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciDetailKullanici.php?kartId=' . $str['kartId'] . ' role=button>Detay</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciSilKullanici.php?kartId=' . $str['kartId'] . ' role=button>Sil</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciLogKullanici.php?kartId=' . $str['kartId'] . ' role=button>Hareketler</a></td>
                            </tr>';
            }
            echo '</table>';
          } elseif ($value != "" && $islem == "2") {
            $sorgu = mysqli_query($con, "Select * from students1 where Ad like N'%$value%' && kurumId='" . $srt['kurumId'] . "'");
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
                                <td><a class=btn brn-primary style=color:blue href=düzenleOgrenciKullanici.php?kartId=' . $str['kartId'] . ' role=button>Düzenle</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciDetailKullanici.php?kartId=' . $str['kartId'] . ' role=button>Detay</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciSilKullanici.php?kartId=' . $str['kartId'] . ' role=button>Sil</a></td>
                                <td><a class=btn brn-primary style=color:blue href=ogrenciLogKullanici.php?kartId=' . $str['kartId'] . ' role=button>Hareketler</a></td>
                            </tr>';
            }
            echo '</table>';
          }
        }
        ?>
      </div>

    </div>
  </div>
  <?php
  include("layoutFooterKullanici.php")
  ?>