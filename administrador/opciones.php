<center>
<h1>Escribir Respuestas</h1>
<br>
<form action="funciones/funciones.php" method="post">
  <table border="0">
<?php
 $respuestas=$_POST['respuestas'];
 $titulo=$_POST['titulo'];
  for($i=1;$i<=$respuestas;$i++){
?>
  <tr>
    <td>respuesta <?php echo $i; ?></td>
    <td><input name="p<?php echo $i;?>" type="text" size="50" maxlength="50"></td>
  </tr>
<?php } ?>
  </table>
 
	<input name="titulo" type="hidden" value="<?php echo $titulo;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
     <input type="submit" name="Submit" value="Enviar"></p>
</form>
</center>