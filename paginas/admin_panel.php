<?php require_once('includes/admin_header.php'); ?>

<!-- Contenido -->

<div class="container-fluid">
	<div class="card-deck">
		<div class="card" align="center">
    <div class="card-body index-background">
      <h4 class="card-title text-white"><b>Agustin Guanipa</b></h4>
      <p class="card-text text-white"><b>Bienvenido al Panel de Control</b></p>
      <a href="../index.php" class="btn btn-light btn-lg"> <b>Ir al Inicio</b><i class="fa fa-home ml-2"></i></a>
    </div>
  </div>
	</div>
</div>
</br>
<div class="container-fluid">
	<div class="card-deck">
	  <div class="card">
	    <img class="card-img-top image-size-index" src="../imagen/adminpanel-1.jpg" alt="Admin Panel Publicaciones">
	    <div class="card-body">
	      <h5 class="card-title text-center"><b>Publicaciones</b></h5>
	      <p class="card-text text-center">Administrar Publicaciones</p>
	    </div>
	    <div class="card-footer" align="center">
      	<a href="admin_publicacion.php" class="btn btn-sm btn-primary">Ver Publicaciones</a>
    	</div>
	  </div>
	  <div class="card">
	    <img class="card-img-top image-size-index" src="../imagen/adminpanel-2.jpg" alt="Admin Panel Imágenes">
	    <div class="card-body">
	      <h5 class="card-title text-center"><b>Portafolio</b></h5>
	      <p class="card-text text-center">Administrar Imágenes</p>
	    </div>
	    <div class="card-footer" align="center">
	    	<a href="admin_portafolio.php" class="btn btn-sm btn-primary">Ver Imágenes</a>
    	</div>
	  </div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

