<?php 
include '../../Views/header.php';





require ('../../Controllers/funciones.php');
require ('../../Controllers/conexion.php');
?>
<?php 

$codigo=$_GET["codigo"];


$dpista=datopista($codigo,$mysqli);
$datopista= $dpista->fetch_array(MYSQLI_ASSOC);
$resul=carrera($codigo,$mysqli);

$podio=podio($codigo,$mysqli);
$clik=$_GET["click"];
if ($clik==7) {
    
    echo"<script type='text/javascript'>document.getElementById('dados').style.display = 'none';</script>";
    echo"<script type='text/javascript'>document.getElementById('lapista').style.display = 'none';</script>";
  

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
Pista <?php echo $datopista['nombre']?>  - Distancia: <?php echo $datopista['distancia'] ?> kilometros</h6>
    </div>
    <div class="card-body">

  
 <!-- inicio de contenido ya aqui-->



</h6>
                        
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                                    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length">
                                        
                                   
                                    
                                    <div class="row"><div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 97px;">Nombre</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 143px;">Posicion</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 70px;">Victorias</th>
                                       </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                        
                                                                            
                                    </tbody>
                                   
                                    <?php while($row = $podio->fetch_array(MYSQLI_ASSOC)) {     
            if ($row['puesto']!=0) {

             ?>


             <tr style="text-align: center;">

                <td><?php 
                $codconductor =  $row['nombre_corredor'];
                $conductor=listarconductoruno($codconductor,$mysqli);
                $conductor1= $conductor->fetch_array();

                echo $conductor1['nombre']; ?></td>

                <td ><?php echo $row['puesto']; 
                
                if ($row['puesto']==1) {
                echo'<img src="../../Assets/img/oro.png">';
                }
                
                if ($row['puesto']==2) {
                    echo'<img src="../../Assets/img/plata.png">';
                    }

                    if ($row['puesto']==3) {
                        echo'<img src="../../Assets/img/bronze.png">';
                        }
                        

                ?></td>
                

                 <td><?php echo $row['veces_ganadas']; ?></td>
                 
            </tr>

            


<?php  }} ?>

  </table> 
                                
  <button class="btn btn-primary btn-user btn-block"  onclick="location.href='../../index.php'">Nueva carrera</button>             
 
                













</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->





	<?php

include '../../views/footer.php'; ?>