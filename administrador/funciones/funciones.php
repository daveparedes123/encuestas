<?php 

//Conectamos con la base de datos
include('../../conexion/config.php');
include('../../conexion/conexion.php');

$respuestas=$_POST['respuestas'];
$titulo=$_POST['titulo'];



//Obtenemos la fecha del sistema
$fecha = time(); 

$db  = new Conexion();
$sql = "INSERT INTO pregunta (nombre) VALUES ('$titulo') "; 
 $result = $db->query($sql);

//Ahora obtenemos el ID de la encuesta que acabamos de insertar
 $db  = new Conexion();
$sql = "SELECT id FROM pregunta ";
 $result = $db->query($sql);
while($row = mysqli_fetch_assoc($result)){ 
	 $id=$row["id"];
} 

for($i=1; $i<=$respuestas; $i++){


 $preg= "p".$i;
 $pass=$_POST[$preg];
 $texto=$pass;

	  


	$sql = "INSERT INTO opciones(nombre, voto, id_pregunta) VALUES('$texto', 0, '$id')";
	 $result = $db->query($sql);
	}
 ?>

<div align="center"><strong>Felicidades!! Si todo ha ido bien, tu encuesta ha 
  sido insertada!! </strong> </div>