<?php
include("../PHP/Konexioa.php");
$link=ConnectDataBase();

$Nombre=$_GET['email'];
mysqli_query($link,"delete from users where email = '$Nombre'");
mysqli_close($link);
header("Location: ../Erregistroak_Gehitu.php");
   ?>
