<?php

	echo "<link rel='stylesheet' type='text/css' href='../css/estilos.css'>";

	$conexion = "conexion_bd.php";
	require_once $conexion;

	$fecha = date('j-n-Y');

	$cedula = $nombres = $apellidos = $fecha = $matricula = $user = $passwd = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$cedula = test_input($_POST["cedula"]);
		$nombres = test_input($_POST["nombres"]);
		$apellidos = test_input($_POST["apellidos"]);
		$fecha = test_input($_POST["fecha"]);
		$matricula = test_input($_POST["matricula"]);
		$user = test_input($_POST["user"]);
		$passwd = test_input($_POST["passwd"]);
	}

	try {

	    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "INSERT INTO estudiante (cedula, nombres, apellidos, fecha, matricula, user, passwd)
	    VALUES ('$_POST[cedula]','$_POST[nombres]','$_POST[apellidos]','$_POST[fecha]','$_POST[matricula]','$_POST[user]','$_POST[passwd]')";
	   
	    $conexion->exec($sql);
	    echo "<p align='center' id='titulo'>Registro Guardado</p>";	
	    echo "<p align='center' class='subtitulo'><a href='estudiante.php'>Regresar</a></p>";
	   }
	catch(PDOException $e)
	    {
	    	echo $sql . "<br>" . $e->getMessage();
	    }

	$conexion = null;

	function test_input($data){

		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}			
?> 