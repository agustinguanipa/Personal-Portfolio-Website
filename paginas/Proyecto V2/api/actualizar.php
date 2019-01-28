<?php

$conexion = "conexion_bd.php";
require_once $conexion;

	$id  = $_POST["id"];
	$post = $_POST;

	$sql = "UPDATE estudiante SET nombres='$_POST[nombres]',apellidos='$_POST[apellidos]',fecha='$_POST[fecha]',matricula='$_POST[matricula]' WHERE cedula='$_POST[cedula]';";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM estudiante WHERE cedula = '".$cedula."'"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();

	echo json_encode($data);

?>