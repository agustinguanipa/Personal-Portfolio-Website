<?php 
	session_start();

  require_once('includes/admin_header.php');

	include 'conexion.php' ;

	if (empty($_GET['id'])) {
		header('location: publicacion_lista.php');
	}

	$id = $_GET['id'];

		$query = mysqli_query($con,"SELECT * FROM tab_imag WHERE ident_imag = '$id' AND statu_imag = 1");
		
	$result = mysqli_num_rows($query);

	if ($result == 0) 
	{
		header('location: portafolio_lista.php');
	}else{
		$data = mysqli_fetch_array($query);
		
		$nombr_imag = $data['nombr_imag'];
		$descr_imag = $data['descr_imag'];
		$image_imag = $data['image_imag'];
		$categ_imag = $data['categ_imag'];
		$fecre_imag = $data['fecre_imag'];
	}
	mysqli_close($con);
?>

<div class="container col-lg-10">
	<div class="card text-center">
	  <div class="card-header">
	    <b>Ver Imagen</b>
	  </div>
		<div class="card-body" class="justify-content-center mx-3 my-1">
			<div class="form-row" align="center">
        <div class="col form-group">
          <label class="form-label" for="ident_prod">Imagen: </label><br>
          <img class="img-md" align="center" src="<?php echo $image_imag; ?>" alt="Imagen Portafolio">
        </div>
      </div>
		  <div class="form-row">
		  	 <div class="col form-group">
		      <label class="form-label" for="nombr_imag"><b>Nombre: </b></label><br>
		      <label><?php echo $nombr_imag; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		  	 <div class="col form-group">
		      <label class="form-label" for="nombr_imag"><b>Categoría: </b></label><br>
		      <label><?php echo $categ_imag; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col form-group">
		      <label class="form-label" for="descr_imag"><b>Descripción: </b></label><br>
		      <br>
		      <label><?php echo $descr_imag; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col form-group">
		      <label class="form-label" for="categ_imag"><b>Fecha de Publicación: </b></label><br>
		      <label><?php echo $fecre_imag; ?></label>
		    </div>
		  </div>
		</div>
		<div class="card-footer">
      <a href="portafolio_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
		</div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>