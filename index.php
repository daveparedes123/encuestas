<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<center><h1>Conjuntos</h1>
<br>
<br>
<img src="img/casa.jpg"  width="300px" height="100px" class="img-responsive">

<form name="form1" action="validar.php" method="post" class="form-horizontal mitad">
		<div class="form-group">
			      <label class="col-sm-5 control-label">Correo:</label>
		     <div class="col-sm-3">
                  <input type="text" class="form-control" name="correo" style="width: 330px;" required="" />
		</div>
		</div>
       	<div class="form-group">
			     <label class="col-sm-5 control-label">Password : </label>
		    <div class="col-sm-3">
                  <input type="password" class="form-control" name="pass" style="width: 330px;" required="" />
		</div>
		</div>
		  
		    	<div class="form-group">
			
		    <div class="col-sm-5 control-label">
                 <input type="submit" value="Enviar" name="subir" class="btn btn-success " required="" />
		</div>
		</div>
 
		
 </form>
 </center>
</body>
</html>