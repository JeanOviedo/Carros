<?php 
error_reporting(E_ERROR | E_PARSE);
include '../../Views/header.php';

require ('../../Controllers/funciones.php');
require ('../../Controllers/conexion.php');


$codconductor=$_GET["id"];
$resultados=listarconductoruno($codconductor,$mysqli);
$conductor= $resultados->fetch_array();


?>





 <!-- inicio de contenido-->
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">

                      

                           
 <div class="container">
        <div class="row">
            <div class="col-lg-12">            
             <!--<button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    --> 
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                   


				<h5 class="modal-title" id="exampleModalLabel"></h5>
             
           
        <form  method="POST" action="edconductor.php">    
        
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="hidden" class="form-control" value="<?php echo $conductor['id']; ?>" id="id">
                <input type="text" class="form-control" value="<?php echo $conductor['nombre']; ?>" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">País:</label>
                <input type="text" class="form-control" id="pais" value="<?php echo $conductor['pais']; ?>">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" value="<?php echo $conductor['edad']; ?>" id="edad">
                </div>            
            
            
                <button type="submit" id="btnActualizar" class="btn btn-primary btn-user btn-block">Actualizar</button>
            
        </form>  









                </div>
        </div>  
    </div>                          
                                   
                                            
                                        
              

    


                        
       
                
       
  

      

  





</div>


                            









	<?php

include '../../views/footer.php'; ?>