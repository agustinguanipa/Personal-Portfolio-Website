<?php 
	include ('conexion.php');
	$ident_imag = $_POST['id'];
			$restaurar_portafolio = mysqli_query($con,"UPDATE tab_imag SET statu_imag = 1 WHERE ident_imag = '$ident_imag'");
			if ($restaurar_portafolio) {
				
					$portafolio = mysqli_query($con,"SELECT * FROM tab_imag WHERE ident_imag = '$ident_imag'");

				header('location: portafolio_lista_inactivo.php');
				exit;
			}else{
				echo 'error';
			}
		exit;
?>