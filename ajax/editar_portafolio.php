<?php
session_start();

include_once '../paginas/conexion.php';

	$id = $_POST['id'];
  $nombr_imag = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_imag"],ENT_QUOTES)));
  $descr_imag = mysqli_real_escape_string($con,(strip_tags($_POST["descr_imag"],ENT_QUOTES)));
  $categ_imag = mysqli_real_escape_string($con,(strip_tags($_POST["categ_imag"],ENT_QUOTES)));
  $image_imag = $_FILES['image_imag']['name'];
  $ruta1 = $_FILES['image_imag']['tmp_name'];
  $destino1 = "../imagen/portafolio/".$image_imag;
  move_uploaded_file($ruta1,$destino1);

  if ($image_imag == '') {
     $sql = "UPDATE tab_imag SET nombr_imag='$nombr_imag', descr_imag='$descr_imag', categ_imag='$categ_imag' WHERE ident_imag='$id'";
  }else
    $sql = "UPDATE tab_imag SET nombr_imag='$nombr_imag', descr_imag='$descr_imag', categ_imag='$categ_imag',  image_imag='$destino1' WHERE ident_imag='$id'";

    $query = mysqli_query($con,$sql);

    header('location: ../paginas/portafolio_actualizar_exito.php');
?>