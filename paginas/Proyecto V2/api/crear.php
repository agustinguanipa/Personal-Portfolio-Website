<?php

$conexion = "conexion_bd.php";
require_once $conexion;

	$post = $_POST;

	$sql = "INSERT INTO estudiante (cedula, nombres, apellidos, fecha, matricula, user, passwd)
		    VALUES ('$_POST[cedula]','$_POST[nombres]','$_POST[apellidos]','$_POST[fecha]','$_POST[matricula]','$_POST[user]','$_POST[passwd]')";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM estudiante order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();

	echo json_encode($data);

?>