<?php 
	include ('conexion.php');
	$ident_proy = $_POST['id'];
			$delete_proyecto = mysqli_query($con,"UPDATE tab_proy SET statu_proy = 0 WHERE ident_proy = '$ident_proy'");
			if ($delete_proyecto) {
				
					$proyecto = mysqli_query($con,"SELECT * FROM tab_proy WHERE ident_proy = '$ident_proy'");

				header('location: publicacion_lista.php');
				exit;
			}else{
				echo 'error';
			}
		exit;

 ?>