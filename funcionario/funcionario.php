<?php   include('../conexion/config.php');
		include('../conexion/conexion.php');
		include('../funciones/pregunta.php');
		include('../funciones/opciones.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Encuesta</title>
</head>
<body>
<center>
<h1>Encuesta a Cliente</h1>
<br>
<table >
<form action="respuestas.php" method="POST">
<?php 
$pregunta = new Pregunta();
foreach($pregunta->lista() as $key_p => $value_p)
 {	
 	 echo "<tr>";
    echo "<td>"."<label>".$value_p['nombre']."</label>"."</td>";
     echo "</tr>";
    $opciones = new Opciones();
    foreach ($opciones->lista($value_p['id']) as $key => $value) 
    {
         echo "<tr>";
        echo "<td>"."<input type='radio' name='opcion".$value_p['id']."' value='".$value['id']."'  required>".$value['nombre']."</td>";
    	echo "</tr>";
    }
 
 }

 ?> 
<tr>
<td><button>Enviar</button></td>
</tr>
</form>
<?php
 $db = new Conexion();
$result ="SELECT p.id as a,p.nombre as b  FROM pregunta AS p INNER JOIN opciones AS O ON p.id=o.id_pregunta
group by id_pregunta"; // using mysqli_query instead
  $result = $db->query($result);
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>

</body>
</html>
</table>
</center>
</body>
</html>

