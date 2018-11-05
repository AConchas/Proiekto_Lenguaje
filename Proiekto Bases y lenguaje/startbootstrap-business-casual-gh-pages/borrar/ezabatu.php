<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();

$Nombre=$_GET['id'];
mysqli_query($link,"delete from tanques where Nombre = '$Nombre'");
mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
   ?>
