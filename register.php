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
<body
	<div id="cajonaco">
		<h1>REGÍSTRATE</h1><br/><br/><br/><br/>
		<?php header("Content-Type: text/html;charset=utf-8"); ?>
		<form action="register_ok.php" method="POST">
			Nombre: <input type="text" name="name"/><br/>
			Primer Apellido: <input type="text" name="apell1"/><br/>
			Segundo Apellido: <input type="text" name="apell2"/><br/>
			DNI: <input type="text" name="dni"/><br/>
			Ciudad: <input type="text" name="ciudad"/><br/>
			Teléfono: <input type="text" name="telefono"/><br/>
			Email: <input type="text" name="email"/><br/>
			Contraseña: <input type="password" name="pass1"/><br/>
			Repite tu contraseña: <input type="password" name="pass2"/><br/>
			<select class="campo" name="rol">
                <option value="2">Profesor</option>
                <option value="3">Usuario</option>
            </select>
			<input type="submit" name="submit" value="REGISTRAR"/>
		</form>
		<br/>
		<br/>
		<a href="index.php">HOME !!</a><br/>
	
	</div>
</body>
</html>
