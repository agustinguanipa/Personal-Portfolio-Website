<?php

	echo "<link rel='stylesheet' type='text/css' href='../css/estilos.css'>";

	$conexion = "conexion_bd.php";
	require_once $conexion;

	try {

	    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "DELETE FROM estudiante WHERE cedula = '$_GET[id]';";

	    $conexion->exec($sql);

	    echo "<p align='center' id='titulo'>Registro Borrado</p>";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	echo "<p align='center' class='subtitulo'><a href='listado_estudiante.php'>Ir al Listado</a></p>";

	$conexion = null;

	
			
?>