<?php

$con = mysqli_connect("localhost", "root", "", "takipsistemi");

if (mysqli_connect_errno()) {

  echo "Failed to connect to mysql:" . $_myqsli_connect_error();
}
mysqli_set_charset($con, "utf8");
?>