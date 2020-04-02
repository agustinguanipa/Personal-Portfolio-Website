<?php 
  require_once('includes/admin_header.php');
?>

<div class="container col-lg-6">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Registrar Publicacion</b>
			  </div>
		   	<div class="card-body">
  				<h2><b>¡La Publicación ha sido Publicada Exitosamente!</b></h2>
				</div>
				<div class="card-footer">
           <a href="publicacion_registro.php" class="btn btn-success float-left"><i class="fa fa-plus"></i> Registrar otra Publicación</a> 
           <a href="publicacion_lista.php" class="btn btn-primary float-right">Ir al Listado <i class="fa fa-arrow-right"></i></a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

