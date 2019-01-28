<?php include("servidor.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Proyecto V2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos_logreg.css">
</head>
<body>
	<div class="cabecera">
		<h2>Registro</h2>
	</div>
	
	<form method="post" action="registro.php" class="caja-ingreso">

		<?php include("errores.php"); ?>

		<div class="datos">
			<label><b>Usuario</b></label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="datos">
			<label><b>Email</b></label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="datos">
			<label><b>Contraseña</b></label>
			<input type="password" name="password_1">
		</div>
		<div class="datos">
			<label><b>Confirmar Contraseña</b></label>
			<input type="password" name="password_2">
		</div>
		<div class="datos" align="center">
			<button type="submit" class="btn btn-success" name="reg_user">Registrarse</button>
			<button type="reset" class="btn btn-primary">Limpiar</button>
		</div>
		<p class="datos-registro">
			Ya estas Registrado? <a href="ingresar.php">Ingresa</a>
		</p>
	</form>

</body>
</html>