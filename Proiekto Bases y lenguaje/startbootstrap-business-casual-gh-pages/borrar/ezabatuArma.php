<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();

$Nombre=$_GET['Izena'];
mysqli_query($link,"delete from armak where Izena = '$Nombre'");
mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
   ?>
