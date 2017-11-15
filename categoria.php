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

	<form action="categoria_ok.php" method="post">

		<h2>Elige categoría</h2></br>
	
		<input type="radio" name="categoria" value="1">Internet</br>
		<input type="radio" name="categoria" value="2">SO</br>
		<input type="radio" name="categoria" value="3">Ofimática</br>
		<input type="radio" name="categoria" value="4">Hardware</br>
		<input type="radio" name="categoria" value="5">Correo</br></br>
		<input type="submit">
	</form>
		

</body>
</html>
