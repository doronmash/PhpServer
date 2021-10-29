<?php
$serverName = "localhost";
$dBUsername = "id17769391_root";
$dBPassword = "GCl_XR5?tL#oj8u7";
$dBName = "id17769391_phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
