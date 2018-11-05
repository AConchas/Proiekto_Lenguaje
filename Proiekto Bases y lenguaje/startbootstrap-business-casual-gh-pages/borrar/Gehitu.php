<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();


$Izena=$_POST['Izena'];
$Herrialdea=$_POST['Herrialdea'];
$Tipo=$_POST['Tipo'];
$kainoia=$_POST['kainoia'];
$Urtea=$_POST['Urtea'];
$kantitatea=$_POST['kantitatea'];
$Pisua=$_POST['Pisua'];
$Blindaje=$_POST['Blindaje'];
$Primaria=$_POST['Primaria'];
$Secundaria=$_POST['Secundaria'];
$Kostua=$_POST['Kostua'];
$Fabri=$_POST['Fabri'];



mysqli_query($link,
  "insert into tanques
  values ('$Izena','$Tipo','$kainoia','$Herrialdea','$Urtea', $kantitatea, '$Pisua', '$Blindaje', '$Primaria', '$Secundaria', '$Kostua', '$Fabri')");

mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
 ?>
