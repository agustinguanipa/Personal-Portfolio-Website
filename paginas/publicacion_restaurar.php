<?php 
	session_start();

  require_once('includes/admin_header.php');

  include 'conexion.php';

$id = $_GET['id'];

$query = mysqli_query($con,"SELECT * FROM tab_proy WHERE ident_proy = '$id' AND statu_proy = 0");
	
$result = mysqli_num_rows($query);

$data = mysqli_fetch_array($query);

	$nombr_proy = $data['nombr_proy'];
	$fecre_proy = $data['fecre_proy'];
?>

<div class="container col-lg-8">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Restaurar Publicación</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="" class="justify-content-center mx-3 my-1" align="center" enctype="" action="publicacion_proceso_restaurar.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
						<h2><b>¿Esta seguro que desea restaurar el siguiente registro?</b></h2>
					  <div class="form-row">
					  	<div class="col form-group">
					      <label class="form-label" for="titul_not"><b>Nombre: </b></label>
					      <label><?php echo $nombr_proy; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="fecpu_not"><b>Fecha de Publicación: </b></label>
					      <label><?php echo $fecre_proy; ?></label>
					    </div>
					  </div>
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" id="" class="btn btn-success btn-block"><i class="fa fa-check"></i> Restaurar Publicación</button>
		          </div>
		        </div>
		      </form>
				</div>
				<div class="card-footer">
           <a href="publicacion_lista_inactivo.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>