<?php 

 include('../conexion/config.php');
		include('../conexion/conexion.php');
		include('../funciones/pregunta.php');
		include('../funciones/opciones.php');

$opciones = new Opciones();



 $pregunta1 = $opciones -> consulta($_POST['opcion1']);

 $pregunta2 = $opciones -> consulta($_POST['opcion2']);



 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Respuestas</title>
 </head>
 <body>
<center><h1>Resultado:</h1></center>


<a href="index.php">Volver a realizar la encuesta</a>



<?php 
  $db  = new Conexion();
$result ="SELECT p.id as a,p.nombre as b,o.nombre as n,o.voto  FROM pregunta AS p INNER JOIN opciones AS O ON p.id=o.id_pregunta order by o.voto
"; // using mysqli_query instead
  $result = $db->query($result);?>
	<table width='80%' border=1>

	<tr bgcolor='#CCCCCC'>
		<td>Id</td>
		<td>Pregunta</td>
		<td>Respuesta</td>
		<td>estadistica</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) {

		echo "<tr>";
		echo "<td>".$res['a']."</td>";
		echo "<td>".$res['b']."</td>";
		echo "<td>".$res['n']."</td>";
		echo "<td>".$res['voto']."</td>";
				
				
	}
	?>
	</table>
 </body>
 </html>