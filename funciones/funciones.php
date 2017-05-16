
<?php

include'conexion/conexion.php';
include'conexion/config.php';


class session{
function ingresar($correo, $pass){
	 $db = new Conexion();


	$query = "SELECT * FROM usuario WHERE correo='$correo' AND password='$pass'";
       $result = $db->query($query);

         $row = mysqli_fetch_array($result);
          if($row != 0){	
                  if($row['funcionario'] == 1){ 	 //aprendiz			
		        	$_SESSION['validacion'] = 1 ; 
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['registro'] = $row['registro'];

		            
			        header('Location: administrador/administrador.php'); 
			    }

			       if($row['funcionario'] == 2){ 	 //aprendiz			
		            session_start(); 
		         	$_SESSION['validacion'] = 2 ; 
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['registro'] = $row['registro'];
                    
			        header('Location: funcionario/funcionario.php'); 
			    }
			    		    

               }else{
             echo "error al ingresar"; 	
	
			}
			
}

}
	
		?>	

