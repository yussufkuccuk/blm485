<?php
include("layoutAdmin.php");
?>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Kart Numarası</th>
      <th scope="col">Giriş Tarihi</th>
      <th scope="col">Çıkış Tarihi</th>
    </tr>
  </thead>
  <?php
           $sorgu=mysqli_query($con,"select * from studentlogs where alarm='1'");
           while($str=mysqli_fetch_array($sorgu)){
               $kartId=$str['kartId'];
               $tc=$str['girişTarihi'];
               $ad=$str['cikisTarihi'];
          echo "
            
  <tbody>
    <tr class=table-active style=color:red>
      <td>$kartId</td>
      <td>$tc</td>
      <td>";
      if($ad!=null) echo $ad; else echo "!!! Çıkış Yapılmamıştır !!!"; 
      echo "</td>
    </tr>
  </tbody>
  ";}
  ?>
</table>










<?php
include("layoutFooterAdmin.php");
?>