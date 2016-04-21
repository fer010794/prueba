<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesion</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<center><h2>Introduce tus datos</h2></center>
			<?php 
				if(isset($error) && $error != NULL){
					echo $error;
				}
			?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="username"></label>
					 Nombre:<center><input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu Nombre"></center>
				</div>

				<div class="form-group">
					<label for="password"></label>
					Contraseña:<input type="password" name="password" id="password" class="form-control" placeholder="************">
				</div>
					
				<input type="submit" type="submit" value="Ingresar" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
</body>
</html>