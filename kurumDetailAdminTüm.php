<?php
include("layoutAdmin.php")
?>

<table class="table table-hover" style="margin-left:10px;margin-right:20px">
  <thead>
    <tr>
      <th scope="col">Kurumun Adı</th>
      <th scope="col">Kurumun Adresi</th>
      <th scope="col">Kurumun Bulunduğu İl</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <?php
           $sorgu=mysqli_query($con,"select * from institutions");
           while($str=mysqli_fetch_array($sorgu)){
             $kurumId=$str['kurumId'];
               $kartId=$str['kurumAdı'];
               $tc=$str['kurumAdresi'];
               $ad=$str['kurumİli'];
          echo "
  <tbody>
    <tr class=table-active>
      <td>$kartId</td>
      <td>$tc</td>
      <td>$ad</td>
      <td><a class=btn brn-primary href=düzenleKurumAdmin.php?kartId=$kurumId role=button>Düzenle</a></td>
      <td><a class=btn brn-primary href=kurumDetailAdmin.php?kartId=$kurumId role=button>Detay</a></td>
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
    <div class="modal-body">Mevcut kurumu silmek istiyorsanız, aşağıdaki "Sil" butonunu seçin.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
      <a class="btn btn-primary" href=<?php echo "kurumSilAdmin.php?kartId=$kurumId" ?>>Sil</a>
    </div>
  </div>
</div>
</div>