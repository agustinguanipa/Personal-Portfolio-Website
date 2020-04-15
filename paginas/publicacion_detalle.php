<?php 

require_once('includes/header.php'); 

$id = $_GET['id'];

?>

<head>
  <title>Blog | Agustin Guanipa</title>
</head>

<?php  
  require_once('conexion.php'); 
  $query="SELECT * FROM tab_proy WHERE ident_proy = '$id'";
  $resultado= $con->query($query);
  while($row=$resultado->fetch_assoc()){
?>

<body>
  <div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
    <div class="container">
      <div class="row">

        <!--- Columna 1 --->

        <div class="col-sm-8 form-group mb-5">
          <h2 class="" style="color: #000000;"><b>Blog</b></h2>
          <hr class="my-4">
          <div class="container text-center noticia-detalle">
            <div class="card">
              <img class="card-img-fluid image-size-detalle" src="<?php echo $row['image_proy']; ?>" alt="Foto de la Publicación">
              <div class="card-body">
                <h2><b><?php echo $row['nombr_proy'] ?></b></h2>
                <hr>
                <p class="card-text"><?php echo $row['descr_proy'] ?></p>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-left" onclick="goBack()"><i class="fa fa-arrow-left"></i> Volver</button>
                <p class="card-text float-right"><small class="text-muted"><?php echo $row['fecre_proy'] ?></small></p>
              </div>
            </div> 
          </div>
        </div>

        <!--- Columna 2 --->

        <div class="col-sm-4 form-group mb-5">
          <h2 class="" style="color: #000000;"><b>Últimos Post</b></h2>
          <hr class="my-4">
          <h5 class="" style="color: #000000;"><b>Twitter</b></h5>
          <a href="https://twitter.com/agustinguanipa?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @agustinguanipa</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a class="twitter-timeline" data-height="1000" href="https://twitter.com/AgustinGuanipa?ref_src=twsrc%5Etfw">Tweets by AgustinGuanipa</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <h5 class="" style="color: #000000;"><b>Instagram</b></h5>
          <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
          <iframe src="//lightwidget.com/widgets/59cbff6a504951e3ac812629fddaa9d8.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>

      </div>
    </div>
  </div>
</body>

<?php 
  }
?>

<?php require_once('includes/footer.php'); ?>

<script>
function goBack() {
  window.history.back();
}
</script>