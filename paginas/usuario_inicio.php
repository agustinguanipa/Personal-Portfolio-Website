<?php
  session_start();
  if (isset($_SESSION['loggedInUsuario'])) {
    header('Location: ../index.php');
    exit();
  }
?>

<?php require_once('includes/logreg_header.php'); ?>

<head>
  <title>Iniciar Sesión | Agustin Guanipa</title>
  <style type="text/css">
    .chover, a:hover{
  color:#333
}
  </style>
</head>

<body>

<!-- Header --->

<header class="section-header">
  <section class="header-main">
    <div class="container" align="center">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="brand-wrap">
            <a href="../index.php" style="color: #000000; text-decoration: none;">
              <img class="logo" src="../imagen/Agustin-1-x-1-Rounded.png">
              <h2 class="logo-text"><b>Agustin Guanipa</b></h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>

<body>
  <div class="container">
    <div class="form-group text-center">
      <div class="formulario-inicio">
        <?php 
                session_start();
                if(isset($_SESSION['message'])){
                  ?>
                  <div class="alert alert-danger text-center" style="margin-top:20px;">
                    <?php echo $_SESSION['message']; ?>
                  </div>
                  <?php

                  unset($_SESSION['message']);
                }else if(isset($_SESSION['error'])){
                  ?>
                  <div class="alert alert-danger text-center" style="margin-top:20px;">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php

                  unset($_SESSION['error']);
                }
              ?>
        <form role="form" id="usuario_inicio" class=" justify-content-center" align="center" action="usuario_autenticacion.php" method="post">
          <h3>Iniciar Sesión</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_usua">Usuario: </label>
              <input type="text" class="form-control" name="usuar_usua" autocomplete="off" id="usuar_usua" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_usua">Contraseña: </label>
              <div class="input-group" id="show_hide_password">
                <input type="password" class="form-control" name="contr_usua" autocomplete="off" id="contr_usua" placeholder="********" maxlength="20">
                <div class="input-group-append">
                  <span class="input-group-text"><a href=""><i class="fa fa-eye-slash chover" aria-hidden="true"></i></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Iniciar Sesión</button>
              <button type="reset" class="btn btn-secondary btn-block"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div>
        </form>
      </div> 
    </div>
  </div>
</body>

<script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>

<?php require_once('includes/logreg_footer.php'); ?>


