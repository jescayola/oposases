<?php
$userbbdd="mnuez";
$passwordbbdd="ases!2017";
$hostbbdd="techberry.es";
$bbdd="opos";

$conector=mysqli_connect($hostbbdd,$userbbdd,$passwordbbdd,$bbdd);
session_start();
if(!isset($_SESSION["rol"]))
{
	echo "Este no es tu sitio <a href='login.php'> Vuelve a intentarlo </a>";
	echo "<a href='login.php'> Volver al registro. </a>";
	echo "<a href='index.php'> Volver al inicio. </a>";
}
else
{
	if($_SESSION["rol"]==1)
	{
		//admin
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