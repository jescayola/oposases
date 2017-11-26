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

	//$post = array(' ',' ',' ');

	$cont=0; 
	
	
	for($i=0;$i<3;$i++){ 
		
	
		if($_POST['p".$i."']==$_SESSION[‘correcta’][$i]){
		$cont++;
		}

	}
	
	if($cont==3){
		echo "test completado";
	}
	else {
		echo "test flojor, prueba otra vez hamijo";
	}

?>

</body>
</html>
