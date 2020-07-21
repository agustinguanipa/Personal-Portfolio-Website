<?php 
	include ('conexion.php');
	$ident_imag = $_POST['id'];
			$delete_portafolio = mysqli_query($con,"UPDATE tab_imag SET statu_imag = 0 WHERE ident_imag = '$ident_imag'");
			if ($delete_portafolio) {
				
					$portafolio = mysqli_query($con,"SELECT * FROM tab_imag WHERE ident_imag = '$ident_imag'");

				header('location: portafolio_lista.php');
				exit;
			}else{
				echo 'error';
			}
		exit;
 ?>