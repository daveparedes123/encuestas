<?php 



class Opciones{



function __construct()
{


}



function lista($idpregunta)
{
  
  $db  = new Conexion();
  $query  = "SELECT * FROM opciones WHERE id_pregunta='".$idpregunta."'";
  $result = $db->query($query);
  while ($fila = mysqli_fetch_assoc($result)) 
  {
  	  $dato[]  = $fila;
  }

     return $dato;

}


function consulta($id)
{
  
  $db  = new Conexion();

  $consulta = "SELECT voto FROM opciones WHERE id=$id"; 
   $resultado = $db->query($consulta);

  while($row =  mysqli_fetch_assoc($resultado)){ 
    $votos= $row['voto'];
  }
    
//Incrementamos en uno los votos totales
  $votos = $votos + 1;
//Y actualizamos la base de datos
  $consulta = "UPDATE opciones SET voto = $votos WHERE id='$id'";
    $result = $db->query($consulta); 

}








}





 ?>