<?php
	session_start();

	include "../paginas/conexion.php";

	$nombr_proy = $_POST['nombr_proy'];
	$desco_proy = $_POST['desco_proy'];
	$descr_proy = $_POST['descr_proy'];
	$areaa_proy = $_POST['areaa_proy'];
	$statu_proy = 1;
	$ident_usua = 1;

	$image_proy = $_FILES['image_proy']['name'];
	$ruta1 = $_FILES['image_proy']['tmp_name'];
	$destino1 = "../imagen/publicaciones/".$image_proy;
	move_uploaded_file($ruta1,$destino1);

	if ($image_proy == '')
	{
		$destino1 = "../imagen/publicaciones/default.jpg";
	}

		$query_insert = mysqli_query($con,"INSERT INTO tab_proy(nombr_proy,desco_proy,descr_proy,areaa_proy,image_proy,statu_proy,ident_usua) VALUES('$nombr_proy','$desco_proy','$descr_proy','$areaa_proy','$destino1','$statu_proy','$ident_usua')");
	 
	header('location: ../paginas/portafolio_registro_exito.php');
?>