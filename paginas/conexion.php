<?php 

$host = 'localhost';
$user = 'root';
$pw = 'root';
$bd = 'personal';

$con = @mysqli_connect($host,$user,$pw,$bd);

if (!$con) {
    echo 'Error en la Conexion';
}
?>