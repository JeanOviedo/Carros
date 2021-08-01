<?php 
error_reporting(E_ERROR | E_PARSE);
include '../../Views/header.php';

require ('../../Controllers/funciones.php');
require ('../../Controllers/conexion.php');
?>
<?php 

$codigo=$_GET["codigo"];
$clik=$_GET["click"];


$dpista=datopista($codigo,$mysqli);
$datopista= $dpista->fetch_array(MYSQLI_ASSOC);
$resul=carrera($codigo,$mysqli);
$podio=podio($codigo,$mysqli);


if ($clik=="") {
   
    
	$clik=0;  
    

}

if ($clik==1) {
	echo" <style type='text/css'> #elh{ display:true; } </style>";
    echo"
    <style type='text/css'> #dados{ display:none; } </style>
    ";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=2'; } 
    setTimeout(click1, 300);
    </script>";
    
 
    //echo 'Hello '.$avanzaecho.'!';

    
}
if ($clik==2) {
    echo" <style type='text/css'> #elh{ display:true; } </style>";
    echo" <style type='text/css'> #dados{ display:none; } </style>";
   
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=3'; } 
    setTimeout(click1, 100);
    </script>";
 

}


if ($clik==3) {
    echo" <style type='text/css'> #elh{ display:true; } </style>";
    echo" <style type='text/css'> #dados{ display:none; } </style>";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=4'; } 
    setTimeout(click1, 10);
    </script>";

}

if ($clik==4) {
    
    echo" <style type='text/css'> #dados{ display:none; } </style>";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=5'; } 
    setTimeout(click1, 10);
    </script>";

}

if ($clik==5) {
    
    echo" <style type='text/css'> #dados{ display:none; } </style>";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=6'; } 
    setTimeout(click1, 10);
    </script>";
    
}
if ($clik==6) {
    
    echo" <style type='text/css'> #dados{ display:none; } </style>";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=7'; } 
    setTimeout(click1, 10);
    </script>";
}


if ($clik==7) {
    
    echo" <style type='text/css'> #dados{ display:none; } </style>";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=7'; } 
    setTimeout(click1, 100);
    </script>";
}

if ($clik==6) {
    
    echo" <style type='text/css'> #dados{ display:none; } </style>";
    echo " <style type='text/css'> #nuevac{ display:none; } </style> ";
    echo"<script type='text/javascript'>
    function click1(){
    window.location='pistas.php?codigo=".$codigo."&click=7'; } 
    setTimeout(click1, 100);
    </script>";
}




if ($clik==7) {
    
    echo"<script type='text/javascript'>document.getElementById('dados').style.display = 'none';</script>";
    echo"<script type='text/javascript'>window.location='resultado.php?codigo=".$codigo."&click=7';</script>";

}





?>



 <!-- inicio de contenido-->
 <div class="container-fluid">

 <!-- Page Heading -->
 
</h1>
 <p class="mb-4"></p>

  <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
Pista <?php echo $datopista['nombre']?>  - Distancia: <?php echo $datopista['distancia'] ?> kilometros</h6> <div id="elh" style="display:none"><h5>  Lanzando Dado espere... </h5> </div> 
    </div>
    <div class="card-body">

  
 <!-- inicio de contenido ya aqui-->



    
   <center>
  <button id="dados" class="btn btn-primary btn-user btn-block"  onclick="location.href='../pages/pistas.php?click=1&codigo=<?php echo $codigo ?>'">Lanzar Dados</button>            
</center>




<?php while($row = $resul->fetch_array(MYSQLI_ASSOC)) { 

  $img= $row['direccion'];
  $dist=$row['distancia'];
  //$distenpantalla=$dist / 100;
  $recorrido="margin-left:".$row['recorrido']."px;";
  $corredor=$row['nombre_corredor'];

  $codconductor =  $corredor;
  $conductor=listarconductoruno($codconductor,$mysqli);
  $conductor1= $conductor->fetch_array();
  $elcorredor = $conductor1['nombre']; 


  //echo "<hr  width='$dist'>Corredor $corredor
  echo "<hr  width='90%'>$elcorredor
  <img style='$recorrido' class='img-fluid px-3 px-sm-5 mt-3 mb-4' src='$img'>  ";
                      
  echo "<hr height='400' width='90%'>"; 
}   //echo "<hr height='400' width='$dist'>"; 



tiro($codigo,$mysqli);


//$finjuego=volver();



?>











        

   </div>
 </div>




	<?php

include '../../views/footer.php'; ?>