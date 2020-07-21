<?php 
  require_once('includes/admin_header.php');

  include '../conexion.php' ;

if (empty($_GET['id'])) {
	header('location: publicacion_lista.php');
}

$id = $_GET['id'];

	$query_user = mysqli_query($con,"SELECT * FROM tab_proy WHERE ident_proy = '$id' AND statu_proy = 1");
  $result_user = mysqli_num_rows($query_user);

  if ($result_user == 0) 
  {
  	header('location: publicacion_lista.php');
  }else{
  	$data_user = mysqli_fetch_array($query_user);
  	
  	$nombr_proy = $data_user['nombr_proy'];
    $desco_proy = $data_user['desco_proy'];
    $descr_proy = $data_user['descr_proy'];
    $image_proy = $data_user['image_proy'];
    $areaa_proy = $data_user['areaa_proy'];
  }
  mysqli_close($con);
?>

<div class="container col-lg-10">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Editar Publicación</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="publicacion_editar" class="justify-content-center mx-3 my-1" align="center" enctype="multipart/form-data" action="../ajax/editar_publicacion.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		        <div class="form-row">
            <div class="col form-group">
                <label class="form-label" for="nombr_proy"><b>Nombre: </b></label>
                <input type="text" class="form-control" name="nombr_proy" autocomplete="off" id="nombr_proy" maxlength="100" value="<?php echo $nombr_proy; ?>" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="areaa_proy"><b>Área: </b></label>
                <select class="form-control notItemOne" id="areaa_proy" name="areaa_proy">
                  <option value="<?php echo $areaa_proy;?>"><?php echo $areaa_proy;?></option>
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
                <input type="text" class="form-control" name="desco_proy" autocomplete="off" id="desco_proy" maxlength="100" value="<?php echo $desco_proy; ?>">
              </div>
            </div>
            <div class="form-row">        
              <div class="col form-group">
                <label class="form-label" for="descr_proy"><b>Descripción Larga: </b></label>
                <textarea class="form-control" name="descr_proy" autocomplete="off" id="descr_proy" maxlength="5000"><?php echo $descr_proy; ?></textarea>
                <script>
                  // Replace the <textarea id="editor1"> with a CKEditor
                  // instance, using default configuration.
                  CKEDITOR.replace( 'descr_proy' );
                </script>
              </div>
            </div>
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-comment-alt"></i> Actualizar Publicación</button>
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

<script type="text/javascript">
  $( document ).ready( function () {
  $( "#publicacion_editar" ).validate( {
    rules: {
      nombr_proy: {
        required: true,
        minlength: 2
      },
      desco_proy: {
        required: true,
        minlength: 10
      },
      descr_proy: {
        required: true,
        minlength: 2
      }
    },

    messages: {
      nombr_proy: {
        required: "Ingrese el Nombre",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      desco_proy: {
        required: "Ingrese la Descripción",
        minlength: "La Descripción debe contener al menos 10 caracteres"
      },
      descr_proy: {
        required: "Ingrese la Descripción",
        minlength: "La Descripción debe contener al menos 10 caracteres"
      }
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