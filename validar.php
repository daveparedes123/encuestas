<?php		


include 'funciones/funciones.php';		
if ($_POST){

 $correo =$_POST['correo'];
 $pass =$_POST['pass'];

session::ingresar($correo,$pass);
}else{

	        
	echo "error al ingresar";
			
				
	
	}


?>



