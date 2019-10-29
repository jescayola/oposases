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


	$_SESSION["cat"] = $_POST["categoria"];
	echo "<div id='cuerpo'>";
	echo "<div id='formulario'>";
	//bucle para obtener una pregunta que no ha respondido ya el usuariobbdd
	//$nueva = false;
	//while(!$nueva)
	//{
			
			
			
			/*//#2vamos a ver si la pregunta ya ha salido
				$sqlcount="SELECT count(registro_pregunta) AS cuenteo FROM REGISTRO_PREGUNTAS WHERE id_usuario=".$_SESSION["id"]." AND registro_pregunta=".$registro["id"];
				$resultado_count=mysqli_query($conector,$sqlcount);
				$registro2=mysqli_fetch_assoc($resultado_count);
				//en $registro_count tenemos el n򭥲o de veces que sale esa preg en registro de preguntas
				$registro_count=$registro2["cuenteo"];
				//ver si ya estᡥn la tabla REGISTRO_PREGUNTAS
				if($registro_count==0)
				{
					//si no estaba, poner $nueva=true e insertar el registro en REGISTRO_TABLAS
					$nueva=true;
					//registrar la nueva pregunta
					//fin del bucle y continuar
					$sqlinsert="INSERT INTO REGISTRO_PREGUNTAS (id_usuario,registro_pregunta) VALUES (".$_SESSION["id"].",".$registro["id"].")";						

					//echo "<br>La pregunta con id: ".$registro["id"]." es nueva para tí!</br>. Insertando!! ".$sqlinsert;
					if(mysqli_query($conector,$sqlinsert))
					{
							//echo "OUH YEAH!!!!! DSDHASHDBUIBDPUIDBNASPDHUWQEHD";
					}
					else
					{
						//echo "game over man!";
					}
				}
				else
				{
					//echo "<br>La pregunta con id: ".$registro["id"]."ya ha salido!</br>";
				}
			//si ya estaba no hacer nada, el bucle se repite -*/
		//}//
			#3 ya tenemos la pregunta en $registro, la mostramos con sus respuestas
		
		
		
		
		
		//string $correcta [3] = {};
		
		//$correctas[]=new articulo ('peros',5,60);
		
		
		$correcta = compact(' ', ' ', ' ');
		$_SESSION[‘correcta’]=$correcta;	
		
		echo "</br><form action='categoria_ok1.php' method='post'>";
		
		for ($i = 0; $i < 10; $i++) {
			
			//#1 obtener pregunta con el sql
			$sql="SELECT id_preguntas,pregunta,R1,R2,R3,R4, correcta, id_categorias FROM PREGUNTAS WHERE id_categorias=".$_SESSION["cat"]." ORDER BY RAND() LIMIT 1";
			//cambio de codificaci󮍊			mysqli_set_charset($conector,"utf8");
			$resultado = mysqli_query($conector,$sql);
			//en $registro estᡬa pregunta completa obtenida al azar
			$registro =mysqli_fetch_assoc($resultado);
			
				echo $registro["pregunta"];
				
				$R1=$registro["R1"];
				$R2=$registro["R2"];
				$R3=$registro["R3"]; 
				$R4=$registro["R4"];
				$C=$registro["correcta"];
							
				$correcta[$i]=$C; 
				
				$_SESSION[‘correcta’][$i] = $correcta[$i];
				
				//echo "ESTO ES VECTORRR CON LA CORRECTAR QUE ES.". $_SESSION[‘correcta’][$i];
				
				$_SESSION["pregunta"] = $registro["id_preguntas"];
				
				// $_SESSION["tema"] = $registro["id_tema"];
				//echo "<br>".$C;
				
				echo"
				<br><input type='radio' name='p".$i."' value='1'>$R1</br>
				<input type='radio' name='p".$i."' value='2'>$R2</br>
				<input type='radio' name='p".$i."' value='3'>$R3</br>
				<input type='radio' name='p".$i."' value='4'>$R4</br> ";
			
				
		}
	echo "<input class='submit' type='submit'>
				</form>";
				echo "</div>";
				echo "</div>";
				
		$_SESSION['correcta']=$correcta; 
		
		//$_SESSION['correcta'][] = $fid;
				
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
</body>
</html>
