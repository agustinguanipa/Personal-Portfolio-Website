<?php

	echo "<link rel='stylesheet' type='text/css' href='../css/estilos.css'>";
	echo "<link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.min.css'>";

	$conexion = "conexion_bd.php";
	require_once $conexion;

	try {

	    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    }
	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}

	$sql = "SELECT * FROM estudiante WHERE cedula = '$_GET[id]';";

	$resultado = $conexion->prepare($sql); 
	$resultado->execute();

	$estudiante = $resultado->setFetchMode(PDO::FETCH_ASSOC);

	foreach(($resultado->fetchAll()) as $k=>$estudiante);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Estudiante</title>
</head>

<link rel="stylesheet" type="text/css" href="../css/estilos.css">

<body>

	<form action="actualizar_estudiante.php" method="post" accept-charset="utf-8">
		<table align="center" border="0">
			<h1 align="center" id="titulo">Editar Datos del Estudiante</h1>
			<tr align="center">
				<td class="campo">Cedula</td>
				<td><input type="text" name="cedula" size="20" maxlength="10" required value="<?php echo $estudiante['cedula'];?>" readonly></td>
			</tr>
			<tr align="center">
				<td class="campo">Nombres</td>
				<td><input type="text" name="nombres" size="20" maxlength="100" required value="<?php echo $estudiante['nombres'];?>"></td>
			</tr>
			<tr align="center">
				<td class="campo">Apellidos</td>
				<td><input type="text" name="apellidos" size="20" maxlength="100" required value="<?php echo $estudiante['apellidos'];?>"></td>
			</tr>
			<tr align="center">
				<td class="campo">Fecha de Nacimiento</td>
				<td><input type="date" name="fecha" value="<?php echo $estudiante['fecha'];?>"></td>
			</tr>
			<tr align="center">
				<td class="campo">Matricula</td>
				<td><input type="text" name="matricula" size="20" maxlength="20" required value="<?php echo $estudiante['matricula'];?>"></td>
			</tr>
			<tr align="center">
				<td class="boton" colspan="2">
					<input type="submit" class="btn btn-success" value="Actualizar">
					<a role="button" class="btn btn-danger" href="listado_estudiante.html">Cancelar</a>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>