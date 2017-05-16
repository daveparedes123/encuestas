<?php 



class Pregunta{



function __construct()
{


}



function lista()
{
  
  $db  = new Conexion();
  $query  = "SELECT p.id,p.nombre FROM pregunta AS p INNER JOIN opciones AS O
ON p.id=o.id_pregunta
group by id_pregunta";
  $result = $db->query($query);
  while ($fila = mysqli_fetch_assoc($result)) 
  {
  	  $dato[]  = $fila;
  }

     return $dato;

}


function consulta($id,$campo)
{
  
  $db  = new Conexion();
  $query  = "SELECT * FROM pregunta WHERE id='".$id."'";
  $result = $db->query($query);
  $dato   = mysqli_fetch_array($result);
  return $dato[$campo];

}



}





 ?>