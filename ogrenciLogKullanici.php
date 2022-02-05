<?php
include("layoutKullanici.php")
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
  $id=$_GET['kartId'];
           $sorgu=mysqli_query($con,"select * from studentlogs where kartId='$id'");
           while($str=mysqli_fetch_array($sorgu)){
               $kartId=$str['kartId'];
               $tc=$str['girişTarihi'];
               $ad=$str['cikisTarihi'];
          ?>
           
  <tbody>
    <!--tr class=table-active>
      <td><?php echo $kartId; ?></td>
      <td><?php echo $tc; ?></td>
      <td><?php if($ad!=null) echo $ad; else echo "!!! Çıkış Yapılmamıştır !!!"; ?></td>

    </tr-->
    <?php
      if($ad!=null){
        ?>
    <tr class=table-active>
      <td><?php echo $kartId; ?></td>
      <td><?php echo $tc; ?></td>
      <td><?php echo $ad; ?></td>
    </tr>
    <?php
      }
      else {
        ?>
        <tr class=table-active style="color:red">
        <td><?php echo $kartId; ?></td>
        <td><?php echo $tc; ?></td>
        <td >!!! Çıkış Yapılmamıştır !!!</td> 
        
      </tr>
    <?php
      }
    ?>
    
  </tbody>
  <?php

  }
  ?>
</table>

<?php
include("layoutFooterKullanici.php")
?>