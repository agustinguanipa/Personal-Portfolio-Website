<?php
session_start();

include_once '../paginas/conexion.php';

	$id = $_POST['id'];
  $nombr_proy = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_proy"],ENT_QUOTES)));
  $desco_proy = mysqli_real_escape_string($con,(strip_tags($_POST["desco_proy"],ENT_QUOTES)));
  $descr_proy = $_POST["descr_proy"];
  $areaa_proy = mysqli_real_escape_string($con,(strip_tags($_POST["areaa_proy"],ENT_QUOTES)));
  $image_proy = $_FILES['image_proy']['name'];
  $ruta1 = $_FILES['image_proy']['tmp_name'];
  $destino1 = "../imagen/publicaciones/".$image_proy;
  move_uploaded_file($ruta1,$destino1);

  if ($image_proy == '') {
     $sql = "UPDATE tab_proy SET nombr_proy='$nombr_proy', desco_proy='$desco_proy', descr_proy='$descr_proy', areaa_proy='$areaa_proy' WHERE ident_proy='$id'";
  }else
    $sql = "UPDATE tab_proy SET nombr_proy='$nombr_proy', desco_proy='$desco_proy', descr_proy='$descr_proy', areaa_proy='$areaa_proy',  image_proy='$destino1' WHERE ident_proy='$id'";

    $query = mysqli_query($con,$sql);

    header('location: ../paginas/publicacion_actualizar_exito.php');
?>