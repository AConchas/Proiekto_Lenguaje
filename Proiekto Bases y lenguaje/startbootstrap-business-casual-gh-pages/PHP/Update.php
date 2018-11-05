<?php
include("Konexioa.php");
$link=ConnectDataBase();

$izena=$_POST["Nombre"];
$pais=$_POST["Pais"];
$tipo=$_POST["Tipo"];
$kainoia=$_POST["CalCanon"];
$urtea=$_POST["Anodeservicio"];
$kantitatea=$_POST["Cantidadcreados"];
$peso=$_POST["Peso"];
$blindaje=$_POST["Blindaje"];
$principal=$_POST["ArmaPrincipal"];
$secundario=$_POST["ArmaSecundaria"];
$coste=$_POST["CostePorUnidad"];
$Fabri=$_POST["Fabri"];


$sql ="UPDATE tanques
		SET
			Pais = '$pais',
			Tipo = '$tipo',
			CalCanon = '$kainoia',
			Anodeservicio = '$urtea',
			Cantidadcreados = $kantitatea,
			Peso = '$peso',
			Blindaje = '$blindaje',
			ArmaPrimaria = '$principal',
			ArmaSecundaria = '$secundario',
			CostePorUnidad = '$coste',
			Fabri = '$Fabri'
		WHERE Nombre = '$izena'";

if ($link->query($sql)==TRUE) {
	ECHO "New record created succesfully.";
}
else{
	echo "Error:".$sql."<br>".$link->error;
}
mysqli_close($link);

header("Location:../Erregistroak_Ezabatu.php");

?>
