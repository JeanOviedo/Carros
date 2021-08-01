
	<?php 

include 'views/header.php';
require ('Controllers/funciones.php');
require ('Controllers/conexion.php');
$resultados=listarpistas($mysqli);
$resultadosconductor=listarconductores($mysqli);


	$auto=rand(0,9);
	$direccion="Assets/img/carro".$auto.".png";
	echo "<link rel='shortcut icon' href='$direccion'>"?>






 <!-- inicio de contenido-->
 <div class="container-fluid">

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800"></h2>
</h1>
 <p class="mb-4"></p>

  <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        
    </div>
    <div class="card-body">

  
 <!-- inicio de contenido ya aqui-->


								<form  method="post" action="Controllers/pista.php"  >
		<br>
	
			<center><img src="Assets/img/trofeos.png" width="25%">  </center>     
			<br>
				<label for="exampleFormControlSelect1">Conductores en Competencia</label>
				<select class="form-control" id="cantcorre" name="cantcorre">
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			
			<br>
			
				<label for="exampleFormControlSelect1">Seleccione la pista</label><br>

			
				<?php while($pista= $resultados->fetch_array(MYSQLI_ASSOC)) {     
            if ($pista['id']!=0) {

             ?>
					<div class="form-check">
				<input required class="form-check-input" type="radio" id="pista" name="pista" value="<?php echo $pista['id'] ?>">
					<label class="form-check-label"><?php echo $pista['nombre'] ?> - <?php echo $pista['distancia'] ?> KM  
  </label></div><?php  }} ?> 


				
					
			<br>

		


			
				<button type="submit" class="btn btn-primary btn-user btn-block">Iniciar  Competencia</button>
				
		
	</form>


                                </div>
                            </div>
















	<?php

	include 'views/footer.php'; ?>