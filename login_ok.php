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
        if($conector)
        {
            $sql="SELECT * FROM USUARIOS";
            $resultado=mysqli_query($conector, $sql);
            if(!isset($_SESSION["id"]))
            {
                if(isset($_POST["nombre"]))
                {
                    $usernameform=$_POST["nombre"];
                    $passwordform=$_POST["password"];
                    $exito=False;
                    while ($registro=mysqli_fetch_assoc($resultado))
                    {
                        if ($usernameform==$registro["nombre"])
                        {
                            if($passwordform==$registro["password"])
                            {
                                $exito=True;
                                $_SESSION["id"]=$registro["id_usuario"];
                                $_SESSION["user"]=$usernameform;  
                                $_SESSION["admin"]=$registro["rol"];
								echo "<h1>WELCOMEEEEEE   ". $usernameform."<h1>";
								echo "<a href='logout.php'>Abandonar sesion</a>";
                                
                            }
                        }
                    }
                    if (!$exito)
                    {
                        echo "Usuario incorrecto <a href='login.php'> Volver al login. </a>";
						echo "                   <a href='register.php'> Regístrate! </a>";
                    }       
                }
            }else
			{
				echo"<h1 id='t1'>¡Ya estás logeado!</h1>";
            }
        }
        else
        {
            echo"Ha habido un error en la conexión"."<br/>";
        }
        mysqli_close($conector);
    ?>
</body>
</html>
