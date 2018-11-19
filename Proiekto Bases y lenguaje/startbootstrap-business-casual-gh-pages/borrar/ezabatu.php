<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();

$Izena=$_GET['id'];
mysqli_query($link,"delete from ogiak where Izena = '$Izena'");
mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
   ?>
