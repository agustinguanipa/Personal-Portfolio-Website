<?php

$conexion = "conexion_bd.php";
require_once $conexion;


	$id  = $_POST["id"];

	$sql = "DELETE FROM estudiante WHERE id = '".$id."'";
	$result = $mysqli->query($sql);

	echo json_encode([$id]);

?>