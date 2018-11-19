<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();


$Izena=$_POST['Izena'];
$veganoa=$_POST['veganoa'];
$Prezioa=$_POST['Prezioa'];
$stock=$_POST['stock'];




mysqli_query($link,
  "insert into ogiak
  values ('$Izena','$veganoa','$Prezioa','$stock')");

mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
 ?>
