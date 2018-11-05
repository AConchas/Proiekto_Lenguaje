<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();


$Izena=$_POST['Izena'];
$Herrialdea=$_POST['Herrialdea'];
$Tipo=$_POST['Urtea'];
$kainoia=$_POST['Kostua'];
$Fabri=$_POST['Fabri'];




mysqli_query($link,
  "insert into armak
  values ('$Izena','$Herrialdea','$Tipo','$kainoia','$Fabri')");
mysqli_free_result($emaitza);
mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
 ?>
