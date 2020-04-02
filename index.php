<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio | Agustin Guanipa</title>
	<meta name="description" content="Agustin Guanipa">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!--- Favicon --->
  <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imagen/favicon.ico" type="image/x-icon">
	<!--- CSS --->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<!--- JS --->
	<script src="js/galeria.js" type="text/javascript"></script>
	<!--- jQuery --->
  <script src="libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- jQuery Mask Plugin --->
  <script type="text/javascript" src="libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
	<!--- Bootstrap 4 --->
  <link rel="stylesheet" href="libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 UI E-Commerce --->
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/jquery-2.0.0.min.js" type="text/javascript"></script>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
</head>

<body>

<!-- Header --->

<header class="section-header">
	<div class="index-background">
	  <h2 class="card-title text-white" style="font-size: 40px;"><b>Agustin Guanipa</b></h2>
    <p class="card-text text-white"><b>Desarrollo Web | Diseño Gráfico | Fotografía </b></p>
	</div>
	
	<nav class="navbar navbar-expand-sm bg-light navbar-primary sticky-top py-1">
		<a class="navbar-brand" href="index.php">
	    <img src="imagen/Agustin-1-x-1-Rounded.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Agustin <b>Guanipa</b>
  	</a>
  	<button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>
  	<div id="navbarNavDropdown" class="navbar-collapse collapse">
  		<ul class="navbar-nav ml-auto">
	    	<li class="nav-item active">
	      	<a class="nav-link" href="index.php"><b>Inicio</b></a>
	    	</li>
	    	<li class="nav-item">
	      	<a class="nav-link" href="paginas/sobre_mi.php"><b>Sobre Mí</b></a>
	   	 	</li>
		    <li class="nav-item">
	      	<a class="nav-link" href="paginas/blog.php"><b>Blog</b></a>
	   	 	</li>
		    <li class="nav-item">
		      <a class="nav-link" href="paginas/portafolio.php"><b>Portafolio</b></a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="paginas/contacto.php"><b>Contacto</b></a>
	    	</li>
	  	</ul>
  	</div>
	</nav>
</header>

<!-- Main --->

	<div class="jumbotron text-center" id="fondo_sobre_mi">
	  <div class="container">
	  	<h2 class="" style="color: #000000;"><b>Sobre Mí</b></h2>
	  	<hr class="my-4">
	  	<div class="row">
	  		<div class="col-sm-6 form-group">
	  			<div>
	      		<img src="imagen/Agustin-1-x-1-Rounded.png" alt="Foto Personal" height="225px">
	    		</div>
	  		</div>
	  		<div class="col-sm-6 form-group">
				<p class="titulo">Carlos Agustin Guanipa Alvarez</p>
		     	<p class="contenido">
		     		20 Años.</br>
		    		Venezolano.</br>
		    		Estudiante de Ingeniería.</br>
		    	</p>
	  			<div>
	      		<a href="paginas/sobre_mi.php" class="btn btn-primary">Ver Más</a>
	    		</div>
	  		</div>
	  	</div>
	  </div>
	</div>

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FFFFFF;">
	  <div class="container">
	  	<h2 class="" style="color: #000000;"><b>Blog</b></h2>
	  	<hr class="my-4">
	  	<?php
        include("paginas/conexion.php");
          $ReadSql = "SELECT * FROM tab_proy WHERE statu_proy = 1 ORDER BY ident_proy DESC LIMIT 3";
          $res = mysqli_query($con, $ReadSql);
      ?>
	  	<div class="card-deck">
	  		<?php
          while($row = mysqli_fetch_assoc($res)){  
        ?>
        <div class="col col-lg-4">
					<div class="card">
					  <img class="card-img-fluid image-size-index" src="__DIR__ ../<?php echo $row['image_proy']; ?>" alt="Personales">
					  <div class="card-body">
					    <h4 class="card-title"><b><?php echo $row['nombr_proy']; ?></b></h4>
					    <p class="card-text"><?php echo $row['desco_proy']; ?></p>
						</div>
						<div class="card-footer">
			      	<p class="card-text float-left"><small class="text-muted"><?php echo $row['fecre_proy']; ?></small></p>
		          <a href="paginas/publicacion_detalle.php?id=<?php echo $row['ident_proy']; ?>" class="btn btn-primary float-right"><i class="fa fa-eye"></i> Leer Más</a>
			    	</div>
					</div>
				</div>
				<?php
          }
        ?>
			</div>
		</div>
	</div>

	<div class="jumbotron text-center" id="fondo_portafolio">
	  <div class="container">
	  	<h2 class="" style="color: #000000;"><b>Portafolio</b></h2>
	  	<hr class="my-4">
	  	<div class="row">
	  		<div class="col-sm-6 form-group">
				<p class="titulo">¡Conoce más acerca de mis Trabajos!</p>
		     	<p class="contenido">
		     		Fotografía y Vídeo,</br>
		    		Diseño Gráfico,</br>
		    		Social Marketing,</br>
		    		y Mucho Más!</br>
		    	</p>
		    	<div>
	      			<a href="paginas/portafolio.php" class="btn btn-primary">Ver Portafolio</a>
	    		</div>
	  		</div>
	  		<div class="col-sm-6 form-group">
				<div>
	      		<img src="imagen/Agustin-with-Glasses-Rounded.png" alt="Foto Personal" height="225px">
	    	</div>
	  		</div>
	  	</div>
	  </div>
	</div>

	<!-- Footer --->

	<footer class="section-footer bg2">
	  <div class="container">
	    <section class="footer-bottom row">
	      <div class="col-sm-4" align="left"> 
	        <p><b>Diseñado y Desarrollado por: </b><br><a href="https://agustinguanipa.epizy.com/" title="Agustin Guanipa">Carlos Agustin Guanipa Alvarez</a></p>
	      </div>
	      <div class="col-sm-4 form-group" align="center">
	          <p class="pie"><b>Redes Sociales</b></p>
	           <a href="https://facebook.com/agustin.guanipa"><i class="icono fab fa-facebook white"></i></a>
		          <a href="https://twitter.com/AgustinGuanipa" class="icono fab fa-twitter"></a>
		          <a href="https://instagram.com/agustinguanipa/" class="icono fab fa-instagram"></a>
		          <a href="https://wa.me/584266908396" class="icono fab fa-whatsapp"></a>
	        </div>
	      <div class="col-sm-4" align="right">
	        <p class="text-sm-right"><b>Agustin Guanipa</b></p>
	        <p class="text-sm-right">Copyright &copy 2020<br>
	        </p>
	      </div>
	    </section>
	  </div>
	</footer>

</body>

</html>

