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

	<div id="formulario">
		<form action="crearpregunta_ok.php" method="post" autocomplete="off">
			<p>Introduce pregunta</p><input class="campo1" type="text" name="pregunta">
			<p>introduce respuesta1</p><input class="campo" type="text" name="respuesta1">
			<input type="radio" name="respuestaok" value="1" >
			<p>Introduce respuesta2</p><input class="campo" type="text" name="respuesta2"><input type="radio" name="respuestaok" value="2" >
			<p>Introduce respuesta3</p><input class="campo" type="text" name="respuesta3"><input type="radio" name="respuestaok" value="3" >
			<p>Introduce respuesta4</p><input class="campo" type="text" name="respuesta4"><input type="radio" name="respuestaok" value="4" >
			<br/>
			<br/>
			<select class="campo" name="categoria">
				<option value="1">Internet</option>
				<option value="2">SO</option>
				<option value="3">Ofimática</option>
				<option value="4">Hardware</option>
				<option value="5">Correo</option>
			</select>
				<br/><input class="boton" type="submit">
			</form>
			</div>
			<script type="text/javascript">
</script>

</body>
</html>
