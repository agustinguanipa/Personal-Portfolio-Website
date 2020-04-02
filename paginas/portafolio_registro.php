<?php 
  require_once('includes/admin_header.php');
?>

<div class="container col-lg-10">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
		    <b>Registrar Imagen</b>
		  </div>
	   	<div class="card-body">
        <form role="form" id="imagen_registro" class="justify-content-center mx- my-1" align="center" enctype="multipart/form-data" action="../ajax/guardar_imagen.php" method="post">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nombr_imag"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_imag" autocomplete="off" id="nombr_imag"  maxlength="100" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="categ_imag"><b>Categoría: </b></label>
              <select class="form-control" id="categ_imag" name="categ_imag">
                <option disabled selected value>Seleccionar una Opción...</option>
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
              <input type="file" class="filestyle" id="image_imag" name="image_imag" alt="Imagen de la Publicacion" data-btnClass="btn-primary" data-text="Subir" data-placeholder="Seleccione una Imagen..." accept="image/*">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="descr_imag"><b>Descripción</b></label>
              <input type="text" class="form-control" name="descr_imag" autocomplete="off" id="descr_imag" maxlength="100">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-images"></i> Registrar Imagen</button>
              <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div> 
        </form>    
			</div>
			<div class="card-footer">
         <a href=portafolio_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
			</div>
    </div>
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

<script type="text/javascript">
	$( document ).ready( function () {
  $( "#imagen_registro" ).validate( {
    rules: {
      nombr_imag: {
        required: true,
        minlength: 6
      },
      categ_imag: {
        required: true
      },
      descr_imag: {
        required: true,
        minlength: 15
      },
    },

    messages: {
      nombr_imag: {
        required: "Ingrese un Nombre",
        minlength: "El Nombre debe contener al menos 6 caracteres"
      },
      categ_imag: {
        required: "Seleccione una Opción"
      },
      descr_imag: {
        required: "Ingrese una Descripción",
        minlength: "La Descripcion debe contener al menos 15 caracteres"
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