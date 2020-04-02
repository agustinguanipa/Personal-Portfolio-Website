<?php 
  require_once('includes/admin_header.php');
?>

<div class="container col-lg-10">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
		    <b>Registrar Publicación</b>
		  </div>
	   	<div class="card-body">
        <form role="form" id="publicacion_registro" class="justify-content-center mx- my-1" align="center" enctype="multipart/form-data" action="../ajax/guardar_publicacion.php" method="post">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nombr_proy"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_proy" autocomplete="off" id="nombr_proy"  maxlength="100" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="areaa_proy"><b>Área: </b></label>
              <select class="form-control" id="areaa_proy" name="areaa_proy">
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="DESARROLLO WEB">DESARROLLO WEB</option>
                <option value="DISEÑO GRAFICO">DISEÑO GRAFICO</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="image_proy"><b>Imagen: </b></label>
              <input type="file" class="filestyle" id="image_proy" name="image_proy" alt="Imagen de la Publicacion" data-btnClass="btn-primary" data-text="Subir" data-placeholder="Seleccione una Imagen..." accept="image/*">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="desco_proy"><b>Descripción Corta: </b></label>
              <input type="text" class="form-control" name="desco_proy" autocomplete="off" id="desco_proy" maxlength="100">
            </div>
          </div>
          <div class="form-row">        
            <div class="col form-group">
              <label class="form-label" for="descr_proy"><b>Descripción Larga: </b></label>
              <textarea class="form-control" name="descr_proy" autocomplete="off" id="descr_proy" maxlength="5000"></textarea>
              <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'descr_proy' );
              </script>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-comment-alt"></i> Registrar Publicación</button>
              <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div> 
        </form>    
			</div>
			<div class="card-footer">
         <a href="publicacion_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
			</div>
    </div>
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

<script type="text/javascript">
	$( document ).ready( function () {
  $( "#publicacion_registro" ).validate( {
    rules: {
      nombr_proy: {
        required: true,
        minlength: 6
      },
      areaa_proy: {
        required: true
      },
      desco_proy: {
        required: true,
        minlength: 15
      },
      descr_proy: {
        required: true,
        minlength: 15
      },
    },

    messages: {
      nombr_proy: {
        required: "Ingrese un Nombre",
        minlength: "El Nombre debe contener al menos 6 caracteres"
      },
      areaa_proy: {
        required: "Seleccione una Opción"
      },
      desco_proy: {
        required: "Ingrese una Descripción Corta",
        minlength: "La Descripcion debe contener al menos 15 caracteres"
      },
      descr_proy: {
        required: "Ingrese una Descripción Larga",
        minlength: "La Descripción debe contener al menos 15 caracteres"
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