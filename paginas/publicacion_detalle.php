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
  <div class="container text-center noticia-detalle">
    <div class="card">
      <img class="card-img-fluid image-size-detalle" src="../<?php echo $row['image_proy']; ?>" alt="Foto de la Publicación">
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