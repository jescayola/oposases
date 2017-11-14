<?php
include_once'conexion.php';
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
		if (isset($_POST["submit"]))
		{
			if(empty($_POST["name"]) || empty($_POST["apell1"]) || empty($_POST["apell2"]) || empty($_POST["dni"]) ||   empty($_POST["ciudad"]) ||
			empty($_POST["telefono"])  ||  empty($_POST["email"])  ||  empty($_POST["pass1"])  ||  empty($_POST["pass2"]))
			{
				echo "Rellena todos los campos porfavor <br/><br/><br/><a href='register.php'>Regístrate!</a>";
			}
			else
			{
				if($_POST["pass1"]==$_POST["pass2"])
				{
					mysqli_select_db($conector,"opos");
					$num_filas=0;
					$pass=$_POST["pass1"];
					$name=$_POST["name"];
					$consultasiyaexiste = mysqli_query($conector, "select * from USUARIOS where password='".$pass1."' AND nombre='".$name."'");
					$num_filas = mysqli_num_rows($consultasiyaexiste);
					if($num_filas>0)
					{
						echo "Ya existe el usuario!<p>Ya estás registrado!</p><br/><br/><br/>";
						echo "<a href='register.php'>VUELVE A INTENTAR EL REGISTRO</a>";
					}
					else
					{
						$consulta="INSERT INTO USUARIOS (nombre, apellido1, apellido2, dni, ciudad, telefono, email, password,rol) VALUES('".$_POST["name"]."','".$_POST["apell1"]."','".$_POST["apell2"]."','".$_POST["dni"]."','".$_POST["ciudad"]."','".$_POST["telefono"]."','".$_POST["email"]."','".$_POST["pass1"]."','".$_POST["rol"]."')";
						mysqli_query($conector,$consulta);
						echo "<h1>Ya estás registrado!!</h1><br/><br/><br/><br/>";
					}
				mysqli_close($conector);
				}
					else
					{
						echo "<p>Las contraseñas no coinciden!</p><br/><br/><br/>";
						echo "<a href='register.php'>VUELVE A INTENTAR EL REGISTRO</a>";
					}
			}
		}
		else
		{
			header("location: index.php");
		}
		echo "<a href='index.php'>Home</a>";
		?>
		
	</div>
</body>
</html>
