<?php
include("Konexioa.php");
$link=ConnectDataBase();

$izena=$_POST["Izena"];
$vegano=$_POST["vegano"];
$prezioa=$_POST["prezioa"];
$stock=$_POST["stock"];



$sql ="UPDATE armak
		SET
			Izena = '$izena',
			vegano = '$vegano',
			prezioa = '$prezioa',
			stock = '$stock',
		WHERE Izena = '$izena'";

if ($link->query($sql)==TRUE) {
	ECHO "New record created succesfully.";
}
else{
	echo "Error:".$sql."<br>".$link->error;
}
mysqli_close($link);

header("Location:../Erregistroak_Ezabatu.php");

?>
