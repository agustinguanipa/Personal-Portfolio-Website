<?php 
  require_once('includes/admin_header.php');

  include '../conexion.php' ;

if (empty($_GET['id'])) {
	header('location: publicacion_lista.php');
}

$id = $_GET['id'];

	$query_user = mysqli_query($con,"SELECT * FROM tab_imag WHERE ident_imag = '$id' AND statu_imag = 1");
  $result_user = mysqli_num_rows($query_user);

  if ($result_user == 0) 
  {
  	header('location: portafolio_lista.php');
  }else{
  	$data_user = mysqli_fetch_array($query_user);
  	
  	$nombr_imag = $data_user['nombr_imag'];
    $descr_imag = $data_user['descr_imag'];
    $image_imag = $data_user['image_imag'];
    $categ_imag = $data_user['categ_imag'];
  }
  mysqli_close($con);
?>

<div class="container col-lg-10">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Editar Imagen</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="portafolio_editar" class="justify-content-center mx-3 my-1" align="center" enctype="multipart/form-data" action="../ajax/editar_portafolio.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		        <div class="form-row">
            <div class="col form-group">
                <label class="form-label" for="nombr_imag"><b>Nombre: </b></label>
                <input type="text" class="form-control" name="nombr_imag" autocomplete="off" id="nombr_imag" maxlength="100" value="<?php echo $nombr_imag; ?>" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="categ_imag"><b>Categoría: </b></label>
                <select class="form-control notItemOne" id="categ_imag" name="categ_imag">
                  <option value="<?php echo $categ_imag;?>"><?php echo $categ_imag;?></option>
                  <option value="RETRATOS">RETRATOS</option>
                  <option value="PAISAJES">PAISAJES</option>
                  <option value="DISENOS">DISEÑOS</option>
                  <option value="ZP FOTOGRAFIA">ZP FOTOGRAFIA</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="image_imag"><b>Imagen: </b></label>
                <input type="file" class="filestyle" id="image_imag" name="image_imag" alt="Imagen del Portafolio" data-btnClass="btn-primary" data-text="Subir" data-placeholder="Seleccione una Imagen..." accept="image/*">
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="descr_imag"><b>Descripción: </b></label>
                <input type="text" class="form-control" name="descr_imag" autocomplete="off" id="descr_imag" maxlength="100" value="<?php echo $descr_imag; ?>">
              </div>
            </div>
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-images"></i> Actualizar Imagen</button>
		            <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
		          </div>
		        </div>
		      </form>
				</div>
				<div class="card-footer">
           <a href="portafolio_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<script type="text/javascript">
  $( document ).ready( function () {
  $( "#portafolio_editar" ).validate( {
    rules: {
      nombr_imag: {
        required: true,
        minlength: 2
      },
      descr_imag: {
        required: true,
        minlength: 10
      },
    },

    messages: {
      nombr_imag: {
        required: "Ingrese el Nombre",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      descr_imag: {
        required: "Ingrese la Descripción",
        minlength: "La Descripción debe contener al menos 10 caracteres"
      },
    },

    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `invalid-feedback` class to the error element
      error.addClass( "invalid-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.next( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
  } );

} );

  jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[A-Z^\s]+$/i.test(value);
}, "Letters only please"); 

</script>

<?php require_once('includes/admin_footer.php');  ?>