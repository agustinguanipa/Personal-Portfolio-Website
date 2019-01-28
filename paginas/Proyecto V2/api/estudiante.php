<?php 

    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Debes Iniciar Sesion para Acceder a esta Pagina";
        header('location: ../api/ingresar.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../api/ingresar.php");
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Proyecto V2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_logreg.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

  <script type="text/javascript">
     var url = "agustinguanipa.000webhostapp.com";
  </script>
  <script src="./../js/item-ajax.js"></script>

  <script>

    function imprimirListadoEstudiante() {

        var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#content')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 80,
            right: 80,
            left: 80,
            width: 500
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
        source, // HTML string or DOM elem ref.
        margins.left, // x coord
        margins.top, { // y coord
            'width': margins.width, // max width of content on PDF
            'elementHandlers': specialElementHandlers
        },

        function (dispose) {
            // dispose: object with X, Y of the last line add to the PDF 
            //          this allow the insertion of new lines after html
            pdf.save('Listado de Estudiantes.pdf');
        }, margins);
    }
    
  </script>

</head>

<body style="height:500px">

<!-- Barra -->

<?php  if (isset($_SESSION['username'])) : ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="../index.php">Proyecto V2</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estudiante.php">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php?logout='1'" style="color: #FFFFFF;">Cerrar Sesion</a>
                </li>
            </ul>
    </nav>
<?php endif ?>

<!-- Tabla -->

<div class="container">
    <div id="content" class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Sistema de Control de Estudiantes</h2>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Añadir Estudiante</button>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Matricula</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
        <tbody>
        </tbody>
        </table>
    </div>

<ul id="pagination" class="pagination-sm"></ul>

<button class="btn btn-info btn-block" onclick="javascript:imprimirListadoEstudiante();">Exportar Listado de Estudiantes</button>

<!-- Crear Estudiante -->

<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Añadir Estudiante</h4>
            </div>
                <div class="modal-body">
                    <form data-toggle="validator" action="crear.php" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="cedula">Cedula</label>
                            <input type="text" name="cedula" class="form-control" data-error="Ingrese Cedula de Identidad" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nombres">Nombres</label>
                            <input type="text" name="nombres" class="form-control" data-error="Ingrese Nombres" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" data-error="Ingrese Apellidos" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="fecha">Fecha de Nacimiento</label>
                            <input type="date" name="fecha" data-error="Ingrese Fecha de Nacimiento" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="matricula">Matricula</label>
                            <input type="text" name="matricula" class="form-control" data-error="Ingrese Matricula" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="user">Usuario</label>
                            <input type="text" name="user" class="form-control" data-error="Ingrese Usuario" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="passwd">Contraseña</label>
                            <input type="text" name="passwd" class="form-control" data-error="Ingrese Contraseña" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-primary">Limpiar</button>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<!-- Editar Estudiante -->

<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Estudiante</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="actualizar.php" method="put">
                    <input type="hidden" name="id" class="edit-id">
                        <div class="form-group">
                            <label class="control-label" for="cedula">Cedula</label>
                            <input type="text" name="cedula" class="form-control" data-error="Ingrese Cedula de Identidad" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nombres">Nombres</label>
                            <input type="text" name="nombres" class="form-control" data-error="Ingrese Nombres" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" data-error="Ingrese Apellidos" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="fecha">Fecha de Nacimiento</label>
                            <input type="date" name="fecha" data-error="Ingrese Fecha de Nacimiento" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="matricula">Matricula</label>
                            <input type="text" name="matricula" class="form-control" data-error="Ingrese Matricula" required />
                            <div class="help-block with-errors"></div>
                        </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success crud-submit-edit">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>