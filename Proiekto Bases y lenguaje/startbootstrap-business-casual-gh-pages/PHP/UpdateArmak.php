<?php
include("Konexioa.php");
$link=ConnectDataBase();

$izena=$_POST["Izena"];
$herrialde=$_POST["Herrialdea"];
$urtea=$_POST["Urtea"];
$kostua=$_POST["Kostua"];
$Fabri=$_POST["Fabri2"];



$sql ="UPDATE armak
		SET
			Izena = '$izena',
			Herrialdea = '$herrialde',
			Urtea = '$urtea',
			Kostua = '$kostua',
			Fabri = '$Fabri'
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
