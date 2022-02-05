<?php 
include("db.php");
if(isset($_REQUEST['islem'])){
 $islem=$_REQUEST['islem'];

if($islem=="giris"){
$kart=$_REQUEST['girisid'];
//echo $kart;
date_default_timezone_set('Europe/Istanbul');
$kayit=date("Y-m-d H:i:s", time());

//echo $kayit;

$sql=mysqli_query($con,"Select id,cikisTarihi from studentlogs where kartId=$kart order by id desc limit 1");
$son=mysqli_fetch_array($sql);

$sonislem= $son[0];
$soncikis=$son[1];

if($soncikis==null) 
$update=mysqli_query($con,"update studentlogs set alarm='1' where id= $sonislem");

$sql=mysqli_query($con,"insert into studentlogs(kartId,girişTarihi) values ($kart,'$kayit')");







}

if($islem=="cikis"){
    $kart=$_REQUEST['cikisid'];  
    //echo $kart;  
$sql=mysqli_query($con,"Select max(id) from studentlogs where kartId=$kart");
$son=mysqli_fetch_array($sql);

$sonislem= $son[0];

//echo $sonislem;

date_default_timezone_set('Europe/Istanbul');
$kayit=date("Y-m-d H:i:s", time());

$update=mysqli_query($con,"update studentlogs set cikisTarihi= '$kayit' where id= $sonislem");

};
}

?>


<form id="giris" action="index.php?islem=giris" method="POST">
<input type="text" id="girisid" name="girisid" placeholder="Kart ID"/><br>
<input type="submit" value="Giriş Yap"/>
</form>
</br>
<form id="cikis" action="index.php?islem=cikis" method="POST">
<input type="text" id="cikisid" name="cikisid" placeholder="Kart ID"/><br>
<input type="submit" value="Çıkış Yap"/>
</form>


