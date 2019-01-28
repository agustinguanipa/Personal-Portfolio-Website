<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Estudiante</title>

	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>

	<form action="guardar_estudiante.php" method="post" accept-charset="utf-8">
		<table align="center" border="0">
			<h1 align="center" id="titulo">Ingresar Datos del Estudiante</h1>
			<tr align="center">
				<td class="campo">Cedula</td>
				<td><input type="text" name="cedula" id="cedula" size="20" maxlength="10" required></td>
			</tr>
			<tr align="center">
				<td class="campo">Nombres</td>
				<td><input type="text" name="nombres" id="nombres" size="20" maxlength="100" required></td>
			</tr>
			<tr align="center">
				<td class="campo">Apellidos</td>
				<td><input type="text" name="apellidos" id="apellidos" size="20" maxlength="100" required></td>
			</tr>
			<tr align="center">
				<td class="campo">Fecha de Nacimiento</td>
				<td><input type="date" name="fecha" id="fecha"></td>
			</tr>
			<tr align="center">
				<td class="campo">Matricula</td>
				<td><input type="text" name="matricula" id="matricula" size="20" maxlength="20" required></td>
			</tr>
			<tr align="center">
				<td class="campo">Usuario</td>
				<td><input type="text" name="user" id="user" size="20" maxlength="100" required></td>
			</tr>
			<tr align="center">
				<td class="campo">Contraseña</td>
				<td><input type="text" name="passwd" id="passwd" size="20" maxlength="100" required></td>
			</tr>
			<tr align="center">
				<td class="boton" colspan="2">
					<input type="submit" class="btn btn-success" value="Enviar">
					<input type="reset" class="btn btn-primary" value="Limpiar">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>