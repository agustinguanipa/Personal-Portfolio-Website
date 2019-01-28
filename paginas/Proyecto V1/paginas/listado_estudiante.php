<?php

error_reporting(E_ALL ^ E_DEPRECATED);

	echo "<link rel='stylesheet' type='text/css' href='../css/estilos.css'>";
	echo "<link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.min.css'>";
	echo "<link rel='stylesheet' type='text/css' href='../jquery/js/jquery-3.3.1.min.js'>";  

	echo "<script>
	function Borrar()
	{
	   if(confirm('Estas Seguro que deseas Borrar este Registro?')){
	    return true;
	   }
	   else{
	    return false;
	   }
	}
	</script>";
	
	$conexion = "conexion_bd.php";
	require_once $conexion;
	
	try {

	    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    }
	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}

	$sql = "SELECT * FROM estudiante ORDER BY cedula";

	$resultado = $conexion->prepare($sql); 
	$resultado->execute();

	$i = 1;
	
	echo "<table  class='table table-striped'>";
		echo "<tr>";
			echo "<td colspan='8' align='center' id='titulo'>Listado de Estudiantes</td>";
		echo "</tr>";
	echo "<tr class='campo'>";
		echo "<td align='center'>#</td>";
		echo "<td align='center'>Cedula</td>";
		echo "<td align='center'>Nombres</td>";
		echo "<td align='center'>Apellidos</td>";
		echo "<td align='center'>Fecha Nac.</td>";
		echo "<td align='center'>Matricula</td>";
		echo "<td align='center'>Editar</td>";
		echo "<td align='center'>Borrar</td>";
	echo "</tr>";

	foreach(($resultado->fetchAll()) as $k=>$estudiante) { 

	    echo "<tr>";
			echo "<td align='center'>$i</td>";
			echo "<td align='center'>$estudiante[cedula]</td>";
			echo "<td align='center'>$estudiante[nombres]</td>";
			echo "<td align='center'>$estudiante[apellidos]</td>";
			echo "<td align='center'>$estudiante[fecha]</td>";
			echo "<td align='center'>$estudiante[matricula]</td>";
			echo "<td align='center' class='editar'><a href='editar_estudiante.php?id=$estudiante[cedula]'><img src='../imagen/edit.png'></a></td>";
			echo "<td align='center' class='borrar'><a onclick='Borrar()' href='borrar_estudiante.php?id=$estudiante[cedula]'><img src='../imagen/delete.png'></a></td>";
		echo "</tr>";

		$i++;

	}

	echo "</table>";

	$conexion = null;
		
?>