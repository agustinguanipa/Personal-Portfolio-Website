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
	<script type="text/javascript" src="../js/galeria.js"></script>
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
		      <a class="nav-link" href="contacto.php">Contacto</a>
	    	</li>
	  	</ul>
  	</div>
	</nav>

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-sm-12 form-group">
	  			<h1>Portafolio</h1>
	  			<hr class="my-4">
	  			<div align="center">
				    <button class="btn btn-primary active filter-button" data-filter="todo">Todo</button>
				    <button class="btn btn-primary filter-button" data-filter="retratos">Retratos</button>
				    <button class="btn btn-primary filter-button" data-filter="paisajes">Paisajes</button>
				    <button class="btn btn-primary filter-button" data-filter="disenos">Diseños</button>
				    <button class="btn btn-primary filter-button" data-filter="zpfotografia">ZP Fotografía</button>

						<div class="row">
							<div class="row">

							<!-- Retratos -->

											<div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Agustin.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Agustin.jpg"
					                         alt="Retratos">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Agustin-with-Glasses.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Agustin-with-Glasses.jpg"
					                         alt="Retratos">
					                </a>
					            </div>
											<div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Agustin-a-New-Yorker.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Agustin-a-New-Yorker.jpg"
					                         alt="Retratos">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Agustin-Painted.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Agustin-Painted.jpg"
					                         alt="Retratos">
					                </a>
					            </div>

							<!-- Paisajes -->

											<div class="col-lg-3 col-md-4 col-xs-6 thumb filter paisajes">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Paisaje-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Paisaje-1.jpg"
					                         alt="Paisaje">
					                </a>
					            </div>

							<!-- Diseños -->

											<div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Arequipe-Los-Alpes.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Arequipe-Los-Alpes.jpg"
					                         alt="Diseno">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Concurso-IG.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Concurso-IG.jpg"
					                         alt="Diseno">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/UNEFA.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/UNEFA.jpg"
					                         alt="Diseno">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Etiqueta-Antonella-Tamburini.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Etiqueta-Antonella-Tamburini.jpg"
					                         alt="Diseno">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Etiqueta-Isabella-Tamburini.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Etiqueta-Isabella-Tamburini.jpg"
					                         alt="Diseno">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Etiqueta-Isabella-y-Antonella-Tamburini.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Etiqueta-Isabella-y-Antonella-Tamburini.jpg"
					                         alt="Diseno">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter disenos">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Logo-Kabys.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Logo-Kabys.jpg"
					                         alt="Diseno">
					                </a>
					            </div>

							<!-- ZP Fotografia -->
											
											<div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Adriana.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Adriana.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
											<div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Flores-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Flores-1.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Taller-Variaditas-2017.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Taller-Variaditas-2017.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Jose.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Jose.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Matrimonio-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Matrimonio-1.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Matrimonio-2.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Matrimonio-2.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Diseno-Arado-Medellin.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Diseno-Arado-Medellin.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Maigreth.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Maigreth.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Natalia.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Natalia.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Taller-Variaditas-Agustin.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Taller-Variaditas-Agustin.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Taller-Variaditas-2018.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Taller-Variaditas-2018.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Ivana.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Ivana.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Dariana.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Dariana.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Junior.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Junior.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Conferencia-Dave-Capella.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Conferencia-Dave-Capella.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					          	<div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Carlos-Cruz.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Carlos-Cruz.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Vicente-Beethoven.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Vicente-Beethoven.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
						          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/ShowRoom-Primarera-2018.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/ShowRoom-Primarera-2018.jpg"
					                         alt="ZP Fotografia">
					                </a>
						          </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Diseno-Taller-ZP-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Diseno-Taller-ZP-1.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Diseno-Taller-ZP-2.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Diseno-Taller-ZP-2.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Diseno-Taller-Maquilladora.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Diseno-Taller-Maquilladora.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Taller-ZP-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Taller-ZP-1.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Taller-ZP-2.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Taller-ZP-2.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Maga-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Maga-1.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Maga-2.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Maga-2.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Niurka-1.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Niurka-1.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Niurka-2.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Niurka-2.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb filter zpfotografia">
					                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
					                   data-image="../imagen/galeria/Sesion-Alvaro.jpg"
					                   data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="../imagen/galeria/Sesion-Alvaro.jpg"
					                         alt="ZP Fotografia">
					                </a>
					            </div>



					            
					            
					        </div>

					        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					            <div class="modal-dialog modal-lg">
					                <div class="modal-content">
					                    <div class="modal-header">
					                        <h4 class="modal-title" id="image-gallery-title"></h4>
					                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
					                        </button>
					                    </div>
					                    <div class="modal-body">
					                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
					                    </div>
					                    <div class="modal-footer">
					                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
					                        </button>

					                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
					                        </button>
					                    </div>
					                </div>
					            </div>
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

