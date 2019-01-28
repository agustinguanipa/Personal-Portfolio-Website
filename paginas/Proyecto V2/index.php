<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Debes Iniciar Sesion para Acceder a esta Pagina";
		header('location: api/ingresar.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: api/ingresar.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Proyecto V2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_logreg.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<body style="height:500px">

<!-- Barra -->

<?php  if (isset($_SESSION['username'])) : ?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<a class="navbar-brand" href="index.php">Proyecto V2</a>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Inicio</a>
	    		</li>
	    		<li class="nav-item">
	      			<a class="nav-link" href="api/estudiante.php">Listado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link">Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./index.php?logout='1'" style="color: #FFFFFF;">Cerrar Sesion</a>
				</li>
	  		</ul>
	</nav>
<?php endif ?>

<div align="center" class="container">
	<h1>Bienvenido al Sistema de Control de Estudiantes</h1>
	<a href="api/estudiante.php" class="btn btn-primary btn-block">Listado de Estudiantes</a>
</div>
		
</body>
</html>