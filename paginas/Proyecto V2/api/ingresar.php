<?php include("servidor.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Proyecto V2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos_logreg.css">
</head>
<body>
	<div class="cabecera">
		<h2>Ingresar</h2>
	</div>
	
	<form method="post" action="ingresar.php" class="caja-ingreso">

		<?php include("errores.php"); ?>

		<div class="datos">
			<label><b>Usuario</b></label>
			<input type="text" name="username" placeholder="Ingresar Usuario">
		</div>
		<div class="datos">
			<label><b>Contraseña</b></label>
			<input type="password" name="password" placeholder="Ingresar Contraseña">
		</div>
		<div class="datos" align="center">
			<button type="submit" class="btn btn-success" name="login_user">Ingresar</button>
		</div>
		<p class="datos-registro">
			No estas Registrado? <a href="registro.php">Registrarse</a>
		</p>

	</form>

</body>
</html>