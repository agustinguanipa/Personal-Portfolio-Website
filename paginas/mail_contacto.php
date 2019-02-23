<?php require_once('header.php'); ?>

<head>
  <title>Contacto | Carlos Agustin Guanipa Alvarez</title>
</head>

<body>
  <div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 form-group">
          <h1>Contacto</h1>
          <hr class="my-4">
          <div class="row">
            <div class="col-sm-12 form-group">
            <?php
              if(isset($_POST['email'])) {
               
                  // Envio de Correo
                  $email_to = "agustin_guanipa@hotmail.com";
                  $email_subject = "Mensaje de Contacto |Agustin Guanipa";
               
                  function died($error) {
                      // Errores
                       header('Location: mail_error.php');
                      echo "Lo siento, pero se encontraron algunos errores en el formulario: ";
                      echo $error."<br/><br/>";
                      echo "<a href='contacto.php' class='btn btn-primary'>Intentar de Nuevo</a>";
                      die();
                      
                  }
               
                  // Validacion si Existen los Datos
                  if(!isset($_POST['nombres']) ||
                      !isset($_POST['apellidos']) ||
                      !isset($_POST['email']) ||
                      !isset($_POST['mensaje'])) {
                      died('Lo siento, pero parece que hay un problema al enviar el formulario.');       
                  }

                  $nombres = $_POST['nombres']; // required
                  $apellidos = $_POST['apellidos']; // required
                  $email_from = $_POST['email']; // required
                  $mensaje = $_POST['mensaje']; // required
               
                  $error_message = "";
                  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
               
                if(!preg_match($email_exp,$email_from)) {
                  $error_message .= 'El Correo Electrónico no es Válido.<br />';
                }
               
                  $string_exp = "/^[A-Za-z .'-]+$/";
               
                if(!preg_match($string_exp,$nombres)) {
                  $error_message .= 'El Nombre no es Válido.<br />';
                }
               
                if(!preg_match($string_exp,$apellidos)) {
                  $error_message .= 'El Apellido no es Válido.<br />';
                }
               
                if(strlen($mensaje) < 2) {
                  $error_message .= 'El Mensaje no es Válido.<br />';
                }
               
                if(strlen($error_message) > 0) {
                  died($error_message);
                }
               
                  $email_message = "Form details below.\n\n";
               
                   
                  function clean_string($string) {
                    $bad = array("content-type","bcc:","to:","cc:","href");
                    return str_replace($bad,"",$string);
                  }
               
                   
               
                  $email_message .= "Nombres: ".clean_string($nombres)."\n";
                  $email_message .= "Apellidos: ".clean_string($apellidos)."\n";
                  $email_message .= "Email: ".clean_string($email_from)."\n";
                  $email_message .= "Mensaje: ".clean_string($mensaje)."\n";
               
              // create email headers
              $headers = 'De: '.$email_from."\r\n".
              'Responder a: '.$email_from."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              @mail($email_to, $email_subject, $email_message, $headers);  

            ?>

<!-- HTML de Envio Correcto -->
 
Gracias! Estaremos en Contacto Pronto!
 
<?php
}
?>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>   
</body>

<?php require_once('footer.php');  ?>





