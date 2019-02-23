<!DOCTYPE html>
<html>
<head>
	<title>Inicio | Carlos Agustin Guanipa Alvarez</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imagen/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="jumbotron text-center" id="fondo_top">
	  <h1 style="color: #FFFFF8">Carlos Agustin Guanipa Alvarez</h1>
	  <p style="color: #FFFFF8">Mí Página Web</p> 
	</div>

	<nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
		<a class="navbar-brand" href="index.php">
	    <img src="imagen/Agustin-1-x-1-Rounded.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Agustin Guanipa
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>
  	<div id="navbarNavDropdown" class="navbar-collapse collapse">
  		<ul class="navbar-nav ml-auto">
	    	<li class="nav-item active">
	      <a class="nav-link" href="index.php">Inicio</a>
	    	</li>
	    	<li class="nav-item">
	      <a class="nav-link" href="paginas/sobre_mi.php">Sobre Mí</a>
	   	 	</li>
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Proyectos
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="paginas/proyectos_personales.php">Personales</a>
		        <a class="dropdown-item" href="paginas/proyectos_academicos.php">Académicos</a>
		        <a class="dropdown-item" href="paginas/proyectos_profesionales.php">Profesionales</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="paginas/portafolio.php">Portafolio</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="paginas/contacto.php">Contacto</a>
	    	</li>
	  	</ul>
  	</div>
	</nav>

	<div class="jumbotron text-center" id="fondo_sobre_mi">
	  <div class="container">
	  	<h1>Sobre Mí</h1>
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

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FFFFFF">
	  <div class="container">
	  	<h1>Proyectos</h1>
	  	<hr class="my-4">
	  	<div class="card-deck">
				<div class="card" style="width:400px">
				  <img class="card-img-top" src="imagen/personal1.jpg" alt="Personales">
				  <div class="card-body">
				    <h4 class="card-title">Personales</h4>
				    <p class="card-text">Proyectos y Empredimientos que estoy realizando y aspiro hacer.</p>
					</div>
					<div class="card-footer">
		      		<a href="paginas/proyectos_personales.php" class="btn btn-primary disabled">Ver Proyectos</a>
		    	</div>
				</div>
				<div class="card" style="width:400px">
				  <img class="card-img-top" src="imagen/coding.jpg" alt="Academicos">
				  <div class="card-body">
				    <h4 class="card-title">Académicos</h4>
				    <p class="card-text">Proyectos utilizando HTML, CSS, JS, PHP, Boostrap, Yii, y demás herramientas, además se encuentran proyectos realizados en las distintas asignaturas de la carrera Ingeniería de Sistemas.</p>
				  </div>
				  <div class="card-footer">
		      	<a href="paginas/proyectos_academicos.php" class="btn btn-primary">Ver Proyectos</a>
		    	</div>
				</div>
				<div class="card" style="width:400px">
				  <img class="card-img-top" src="imagen/office1.jpg" alt="Profesionales">
				  <div class="card-body">
				    <h4 class="card-title">Profesionales</h4>
				    <p class="card-text">Proyectos enfocados al área Profesional y Laboral.</p>
				  </div>
				  <div class="card-footer">
		      	<a href="paginas/proyectos_profesionales.php" class="btn btn-primary disabled">Ver Proyectos</a>
		    	</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron text-center" id="fondo_portafolio">
	  <div class="container">
	  	<h1>Portafolio</h1>
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

	<div class="jumbotron text-center" style="margin-bottom:0">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 form-group">
					<p class="pie">Contáctame!</p>
					<a href="paginas/contacto.php" class="btn btn-primary">Contactarme</a></a>
				</div>
				<div class="col-sm-6 form-group">
					<p class="pie">Sígueme!</p>
					<a href="https://facebook.com/agustin.guanipa" class="fa fa-facebook"></a>
					<a href="https://twitter.com/AgustinGuanipa" class="fa fa-twitter"></a>
					<a href="https://instagram.com/agustinguanipa/" class="fa fa-instagram"></a>
					<a href="https://www.pinterest.com/agustin_guanipa/" class="fa fa-pinterest"></a>
					<a href="https://plus.google.com/u/0/+CarlosAgustinGuanipaAlvarez" class="fa fa-google"></a>
					<a href="https://linkedin.com/in/agustinguanipa/" class="fa fa-linkedin"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group">
					<p class="pie"></br>Carlos Agustin Guanipa Alvarez. 2019.</p>
				</div>
			</div>
		</div>
	</div>

</body>

</html>

