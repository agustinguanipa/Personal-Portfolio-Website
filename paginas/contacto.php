<!DOCTYPE html>
<html>
<head>
	<title>Carlos Agustin Guanipa Alvarez</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../imagen/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/iconos.css">
	<link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
	<!--<script type="text/javascript" src="../js/contacto.js"></script>-->
	<script type="text/javascript" src="../js/form.js"></script>
</head>

<body>

	<div class="jumbotron text-center" id="fondo_top">
	  <h1 style="color: #FFFFF8">Carlos Agustin Guanipa Alvarez</h1>
	  <p style="color: #FFFFF8">Mí Página Web</p> 
	</div>

	<nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
		<a class="navbar-brand" href="../index.php">
	    <img src="../imagen/Agustin-1-x-1-Rounded.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Agustin Guanipa
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>
  	<div id="navbarNavDropdown" class="navbar-collapse collapse">
  		<ul class="navbar-nav ml-auto">
	    	<li class="nav-item active">
	      <a class="nav-link" href="../index.php">Inicio</a>
	    	</li>
	    	<li class="nav-item">
	      <a class="nav-link" href="sobre_mi.php">Sobre Mí</a>
	   	 	</li>
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Proyectos
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="proyectos_personales.php">Personales</a>
		        <a class="dropdown-item" href="proyectos_academicos.php">Académicos</a>
		        <a class="dropdown-item" href="proyectos_profesionales.php">Profesionales</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="portafolio.php">Portafolio</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link disabled" href="contacto.php">Contacto</a>
	    	</li>
	  	</ul>
  	</div>
	</nav>

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-sm-12 form-group">
	  			<h1>Contacto</h1>
	  			<hr class="my-4">
	  			<div class="row">
			  		<div class="col-sm-8 form-group">
							<form role="form" id="contact-form" class="contact-form action="mailto:agustin_guanipa@hotmail.com" method="post" enctype="text/plain"">
                <div class="row">
            			<div class="col-md-6 form-label">
            				<label>Nombres: </label>
                		<div class="form-group">
                			<input type="text" class="form-control" name="nombres" autocomplete="off" id="nombres" placeholder="Carlos Agustin">
                		</div>
              		</div>
              		<div class="col-md-6 form-label">
              			<label>Apellidos: </label>
                		<div class="form-group">
                			<input type="text" class="form-control" name="apellidos" autocomplete="off" id="apellidos" placeholder="Guanipa Alvarez">
                		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 form-label">
              			<label>E-Mail: </label>
                		<div class="form-group">
                    	<input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="correo@mail.com">
                		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 form-label">
              			<label>Mensaje: </label>
                		<div class="form-group">
                    	<textarea class="form-control textarea" rows="3" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                 		</div>
              		</div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                		<button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                	</div>
              	</div>
            	</form>
            	<div id="error_message" style="width:100%; height:100%; display:none; ">
                <h4>
                  Error
              	</h4>
              		Sorry there was an error sending your form. 
          		</div>
          		<div id="success_message" style="width:100%; height:100%; display:none; ">
								<h2>Success! Your Message was Sent Successfully.</h2>
							</div>
			  		</div> 
			  		<div class="col-sm-4 form-group">
							<div>
				      	<img src="../imagen/Agustin-with-Glasses-Rounded.png" alt="Foto Personal" height="325px">
				    	</div>
			  		</div>
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
					<a href="contacto.php" class="btn btn-primary">Contactarme</a>
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

