<?php
include("Konexioa.php");
$link=ConnectDataBase();

$izena=$_POST["Izena"];
$pais=$_POST["prezioa"];
$Tipo=$_POST["vegano"];
$CalCanon=$_POST["stock"];

$Tipo=(int)$Tipo;
$pais=(float)$pais;
$CalCanon=(int)$CalCanon;


$sql ="UPDATE ogiak
		SET
			Izena = '$izena',
			prezioa = '$pais',
			vegano = '$Tipo',
			stock = '$CalCanon',
		WHERE Izena = '$izena'";

if ($link->query($sql)==TRUE) {
	ECHO "Aldaketak ondo egin dira!!.";
}
else{
	echo "Error:".$sql."<br>".$link->error;
}
mysqli_close($link);

header("Location:../Erregistroak_Ezabatu.php");

?>
