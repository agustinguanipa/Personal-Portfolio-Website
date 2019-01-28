<?php

	echo "<link rel='stylesheet' type='text/css' href='../css/estilos.css'>";

	$conexion = "conexion_bd.php";
	require_once $conexion;

	try {

	    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "UPDATE estudiante SET nombres='$_POST[nombres]',apellidos='$_POST[apellidos]',fecha='$_POST[fecha]',matricula='$_POST[matricula]' WHERE cedula='$_POST[cedula]';";

	    $resultado = $conexion->prepare($sql);
	    $resultado->execute();

	    echo "<p align='center' id='titulo'>Registro Actualizado</p>";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	   echo "<p align='center' class='subtitulo'><a href='listado_estudiante.php'>Ir al Listado</a></p>";

	$conexion = null;
			
?> 