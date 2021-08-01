<?php 

require ('conexion.php');


$cantcorre = $_POST['cantcorre'];
$pista = $_POST['pista'];
$permitted_chars = '0123456789';
$codigo= substr(str_shuffle($permitted_chars), 0, 20);
$pista=intval($pista);  
for ($i=1; $i <=$cantcorre ; $i++) { 
    $sql="INSERT INTO `carrera`(nombre_corredor, pista_id, carro_id, recorrido, codigo) VALUES ('$i','$pista','$i','0','$codigo')";
    $resultado = $mysqli->query($sql);
}


header("Location:../Views/pages/pistas.php?codigo=$codigo");
 ?>