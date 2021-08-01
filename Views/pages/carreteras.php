<?php 

include '../../Views/header.php';

require ('../../Controllers/funciones.php');
require ('../../Controllers/conexion.php');


$resultados=listarpistas($mysqli);
//$conductor= $resultados->fetch_array();


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
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Distancia</th>                                
                                <th>Opciones</th>  
                               
                            </tr>
                        </thead>
                        <tbody>
						<?php while($pista= $resultados->fetch_array(MYSQLI_ASSOC)) {     
            if ($pista['id']!=0) {

             ?>
                            <tr>
                                <td><?php echo $pista['id']; ?></td>
                                <td><?php echo $pista['nombre'] ?></td>
                                <td><?php echo $pista['distancia'] ?></td>
                                 
                                <td><div class="text-center">
									<div class="btn-group">
										
										<button id="dados" class="btn btn-primary btn-user btn-block"  onclick="location.href='../pages/edcarretera.php?id=<?php echo $pista['id']; ?>'">Editar</button>          
									</div></td>
                            </tr>
                                                         
                        </tbody> <?php  }} ?>       
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>                          
                                   
                                            
                                        
              

    


                                
                                
                        

<!--Modal para CRUD-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="btnEditar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">País:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      

  





</div>


                            









	<?php

include '../../views/footer.php'; ?>