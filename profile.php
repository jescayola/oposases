<?php
include_once'conexion.php';
if(!isset($_SESSION["rol"]))
{
	echo "No has iniciado sesión <a href='login.php'> Vuelve a intentarlo </a>";
	echo "<a href='login.php'> Volver al registro. </a>";
	echo "<a href='index.php'> Volver al inicio. </a>";
}
else
{
	if($_SESSION["rol"]==1)
	{
		header("location: index.php");
	}
	elseif($_SESSION["rol"]==2)
	{
		//profesor
	}
	elseif($_SESSION["rol"]==3)
	{
		//alumno
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>-Perfil-</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<h1>tu perfil</h1>
</body>
</html>
