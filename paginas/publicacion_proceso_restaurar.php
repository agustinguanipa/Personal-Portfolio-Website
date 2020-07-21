<?php 
	include ('conexion.php');
	$ident_proy = $_POST['id'];
			$restaurar_proyecto = mysqli_query($con,"UPDATE tab_proy SET statu_proy = 1 WHERE ident_proy = '$ident_proy'");
			if ($restaurar_proyecto) {
				
					$proyecto = mysqli_query($con,"SELECT * FROM tab_proy WHERE ident_proy = '$ident_proy'");

				header('location: publicacion_lista_inactivo.php');
				exit;
			}else{
				echo 'error';
			}
		exit;
?>