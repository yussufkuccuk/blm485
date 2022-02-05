<?php
include("layoutAdmin.php")
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">TC Kimlik No</th>
      <th scope="col">Adı</th>
      <th scope="col">Soyadı</th>
      <th scope="col">Kayıt Tarihi</th>
      <th scope="col">Rolü</th>
      <th scope="col">İşlem</th>
    </tr>
  </thead>
  <?php
           $sorgu=mysqli_query($con,"select * from admins");
           while($str=mysqli_fetch_array($sorgu) ){
               $adminId=$str['id']; 
               $tc=$str['TCKimlikNo'];
               $ad=$str['Ad'];
               $soyad=$str['Soyad'];
               $kayıt=$str['kayitTarihi'];
               $rol=$str['role'];
               $x=mysqli_query($con,"select * from roles where id='$rol'");
               $rolee=mysqli_fetch_assoc($x);
              $rol=$rolee['name'];         
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
      <td><a class=btn brn-primary role=button href=# data-toggle=modal data-target=#logoutModal1 >Sil</a></td>
    </tr>
  </tbody>
  ";}
  ?>
</table>

<?php
include("layoutFooterAdmin.php")
?>

<div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Silmek İstiyor Musunuz?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Mevcut yöneticiyi silmek istiyorsanız, aşağıdaki "Sil" butonunu seçin.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
      <a class="btn btn-primary" href=<?php echo "yoneticiSilAdmin.php?kartId=$adminId" ?>>Sil</a>
    </div>
  </div>
</div>
</div>