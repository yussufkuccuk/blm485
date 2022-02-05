<?php
session_start();
$_session_unset['adminGirisi'];
$_session_unset['kullaniciGirisi'];
header('Location:login.php');
session_destroy();
?>