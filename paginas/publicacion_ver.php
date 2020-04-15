<?php 
	session_start();

  require_once('includes/admin_header.php');

	include 'conexion.php' ;

	if (empty($_GET['id'])) {
		header('location: publicacion_lista.php');
	}

	$id = $_GET['id'];

		$query = mysqli_query($con,"SELECT * FROM tab_proy WHERE ident_proy = '$id' AND statu_proy = 1");
		
	$result = mysqli_num_rows($query);

	if ($result == 0) 
	{
		header('location: publicacion_lista.php');
	}else{
		$data = mysqli_fetch_array($query);
		
		$nombr_proy = $data['nombr_proy'];
		$desco_proy = $data['desco_proy'];
		$descr_proy = $data['descr_proy'];
		$image_proy = $data['image_proy'];
		$areaa_proy = $data['areaa_proy'];
		$fecre_proy = $data['fecre_proy'];
	}
	mysqli_close($con);
?>

<div class="container col-lg-10">
	<div class="card text-center">
	  <div class="card-header">
	    <b>Ver Publicación</b>
	  </div>
		<div class="card-body" class="justify-content-center mx-3 my-1">
			<div class="form-row" align="center">
        <div class="col form-group">
          <label class="form-label" for="ident_prod">Imagen: </label><br>
          <img class="img-md" align="center" src="<?php echo $image_proy; ?>" alt="Imagen Publicación">
        </div>
      </div>
		  <div class="form-row">
		  	 <div class="col form-group">
		      <label class="form-label" for="nombr_proy"><b>Título: </b></label><br>
		      <label><?php echo $nombr_proy; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		  	 <div class="col form-group">
		      <label class="form-label" for="nombr_proy"><b>Área: </b></label><br>
		      <label><?php echo $areaa_proy; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col form-group">
		      <label class="form-label" for="desco_proy"><b>Descripción Corta: </b></label><br>
		      <label><?php echo $desco_proy; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col form-group">
		      <label class="form-label" for="descr_proy"><b>Descripción Larga: </b></label><br>
		      <br>
		      <label><?php echo $descr_proy; ?></label>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col form-group">
		      <label class="form-label" for="areaa_proy"><b>Fecha de Publicación: </b></label><br>
		      <label><?php echo $fecre_proy; ?></label>
		    </div>
		  </div>
		</div>
		<div class="card-footer">
      <a href="publicacion_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
		</div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>