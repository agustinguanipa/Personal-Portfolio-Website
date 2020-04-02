<?php
	session_start();

	include "../paginas/conexion.php";

	$nombr_imag = $_POST['nombr_imag'];
	$descr_imag = $_POST['descr_imag'];
	$categ_imag = $_POST['categ_imag'];
	$statu_imag = 1;
	
	$image_imag = $_FILES['image_imag']['name'];
	$ruta1 = $_FILES['image_imag']['tmp_name'];
	$destino1 = "../imagen/portafolio/".$image_imag;
	move_uploaded_file($ruta1,$destino1);

		$query_insert = mysqli_query($con,"INSERT INTO tab_imag(nombr_imag,descr_imag,categ_imag,image_imag,statu_imag) VALUES('$nombr_imag','$descr_imag','$categ_imag','$destino1','$statu_imag')");
		 
	header('location: ../paginas/portafolio_registro_exito.php');
?>