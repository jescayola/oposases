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
	<div>
		<?php
			if (isset($_SESSION["id"]))
			{
				echo"<h1>¡Ya estás logeado!</h1>";
			}
			else
			{
				echo"<h1 id='t1'>Inicia sesión</h1>
					<form id='formulario' action='login_ok.php' method='post'>
					<h2 class='t2'>Nombre de usuario</h2>
					<input type='text' name='nombre'>
					<h2 class='t2'>Contraseña</h2>
					<input type='password' name='password'>
					<input type='submit' value='Iniciar sesión!' class='boton'>
					<br>
				</form>";
			}
		?>
	</div>
</body>
</html>
