<?php 

include '../../Views/header.php';

require ('../../Controllers/funciones.php');
require ('../../Controllers/conexion.php');


if (!empty($_POST)) {
    $alert = "";
   
    if (empty($_POST['nombre']) || empty($_POST['pais']) || empty($_POST['edad'])) {
      $alert = '<p class"error">Todo los campos son requeridos </p>' ;
      echo  "" .$alert."";
    } else {
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $pais = $_POST['pais'];
      $edad = $_POST['edad'];
  
    $conductor=actualizacorredor($nombre,$pais,$edad,$id,$mysqli);
      
    }
  }

  else

  {
  // Mostrar Datos
  $codconductor = $_GET['id'];
  $data=listarconductoruno($codconductor,$mysqli);
  $data2= $data->fetch_array();
      $id= $data2['id'];
      $nombre = $data2['nombre'];
      $pais = $data2['pais'];
      $edad = $data2['edad'];
    
  
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

          <form class="" action="" method="post">
          
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" placeholder="Ingrese Nombre" name="nombre" class="form-control" id="nombre" value="<?php echo $nombre; ?>">
            </div>
            <div class="form-group">
              <label for="telefono">País</label>
              <input type="text" placeholder="Ingrese Pais" name="pais" class="form-control" id="pais" value="<?php echo $pais; ?>">
            </div>
            <div class="form-group">
              <label for="direccion">Edad</label>
              <input type="text" placeholder="Ingrese Direccion" name="edad" class="form-control" id="edad" value="<?php echo $edad; ?>">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar </button>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->



</div>
        </div>  
    </div>                          
                                   
                                            
                                        
              

    


                        
       
                
       
  

      

  





</div>


                            






<?php
  }
include '../../views/footer.php'; ?>