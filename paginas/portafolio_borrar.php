<?php 
	session_start();

  require_once('includes/admin_header.php');

  include 'conexion.php' ;

$id = $_GET['id'];

	$query = mysqli_query($con,"SELECT * FROM tab_imag WHERE ident_imag = '$id' AND statu_imag = 1");
	
$result = mysqli_num_rows($query);

$data = mysqli_fetch_array($query);

	$nombr_imag = $data['nombr_imag'];
	$fecre_imag = $data['fecre_imag'];
?>

<div class="container col-lg-8">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Eliminar Imagen</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="" class="justify-content-center mx-3 my-1" align="center" enctype="" action="portafolio_proceso_eliminar.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
						<h2><b>¿Esta seguro que desea eliminar el siguiente registro?</b></h2>
					  <div class="form-row">
					  	<div class="col form-group">
					      <label class="form-label" for="nombr_imag"><b>Nombre: </b></label>
					      <label><?php echo $nombr_imag; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="fecre_imag"><b>Fecha de Publicación: </b></label>
					      <label><?php echo $fecre_imag; ?></label>
					    </div>
					  </div>
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" id="" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Eliminar Imagen</button>
		          </div>
		        </div>
		      </form>
				</div>
				<div class="card-footer">
           <a href="portafolio_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>