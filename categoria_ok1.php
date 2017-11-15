<?php
include_once'conexion.php';
?>
<?php
session_start();

$userbbdd="mnuez";
$passwordbbdd="ases!2017";
$hostbbdd="techberry.es";
$bbdd="opos";

$conector=mysqli_connect($hostbbdd,$userbbdd,$passwordbbdd,$bbdd);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>    </title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<?php

	if ($_POST["respuesta"]==$_SESSION[0] && $_POST["respuesta"]==$_SESSION[1] && $_POST["respuesta"]==$_SESSION[2])
	{
			echo "completaste el test shuprimo";
			
			echo "sesion0".$_SESSION[0];
			echo "sesion1".$_SESSION[1];
			echo "sesion2".$_SESSION[2];
			
	}
	else {
			echo "insufisiente wei";
			
			echo "sesion0".$_SESSION[0];
			echo "sesion1".$_SESSION[1];
			echo "sesion2".$_SESSION[2];
	}

?>

</body>
</html>
