<!DOCTYPE html>
<html lang="es">
<head>
  <title>Proyecto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="height:500px">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="paginas/estudiante.php" target="frame">Proyecto</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="paginas/estudiante.php" target="frame">Ingresar Estudiante</a>
    <li class="nav-item">
      <a class="nav-link" href="paginas/listado_estudiante.php" target="frame">Listado</a>
    </li>
  </ul>
</nav>

<div class="container-fluid" style="margin-top:80px">
  <h3>Ingresar Estudiante</h3>
  <p>Datos Personales</p>
  <iframe src="paginas/estudiante.php" width="100%" height="1000px" id="frame" name="frame"></iframe>
</div>

</body>
</html>