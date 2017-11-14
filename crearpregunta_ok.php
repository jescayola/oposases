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
			$pregunta = $_POST["pregunta"];
			$respuesta1 = $_POST["respuesta1"];
			$respuesta2 = $_POST["respuesta2"];
			$respuesta3 = $_POST["respuesta3"];
			$respuesta4 = $_POST["respuesta4"];
			$respuestaok = $_POST["respuestaok"];
			$categoria = $_POST["categoria"];
			
			$conector=mysqli_connect($hostbbdd,$userbbdd,$passwordbbdd,$bbdd);
			
			$sql="INSERT INTO PREGUNTAS (id_categorias, pregunta,R1,R2,R3,R4, correcta) VALUES ('".$categoria."','".$pregunta."','".$respuesta1."','".$respuesta2."','".$respuesta3."','".$respuesta4."''".$respuestaok."')";
			
			mysqli_set_charset($conector,"utf8");  
			
		
			if(empty($_POST["pregunta"]) || !isset($_POST["respuestaok"]) || empty($_POST["categoria"]))
			{
				
					echo "Rellena todos los campos porfavor <br/><a href='crearpregunta.php'>Vuelve a intentarlo</a>";
	
			} 
			else{
				
				if(empty($_POST["respuesta1")|| empty($_POST["respuesta2"])) {
					
					echo "Mínimo dos respuestas <br/><a href='crearpregunta.php'>Vuelve a intentarlo</a>";
					
				} 
			
				elseif(empty($_POST["respuesta3"])&& isset($_POST["respuesta4"])){
				
					echo "Rellena la respuesta 3 antes de la 4. <br/><a href='crearpregunta.php'>Vuelve a intentarlo</a>";
				
				} //AQUIIIIII
				
				else {
					
					if (mysqli_query($conector,$sql)) {
					//echo "correcto<br/>";
					//echo "<a href='crearpregunta.php'>Sigue metiendo preguntas</a>";
					//header ("location:crearpregunta.php");
					}
					else {
						echo "Error<br/><a href='crearpregunta.php'>Vuelve a intentarlo</a>";
					}
					header ("location:crearpregunta.php");
				}
				
				
			}
			
		?>

</body>
</html>
