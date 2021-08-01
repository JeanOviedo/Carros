<!DOCTYPE html>
<html lang="es">

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reto</title>

	<!-- // URL GLOBAL -->
	<?php
	$URL= "http://localhost/RetoJean/";


?>

    <!-- Custom fonts for this template-->
    <link href="<?php echo '' . $URL ;?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo '' . $URL;?>css/sb-admin-2.min.css" rel="stylesheet">


<!--datables CSS básico-->

    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="<?php echo '' . $URL;?>vendor/datatables/dataTables.bootstrap4.min.css">   

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-car"></i>
                </div>
                <div class="sidebar-brand-text mx-3">El Reto 0.1</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


        

            

          

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                By Jean Oviedo
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Contenido</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Seleccion:</h6>
                        <a class="collapse-item" href="<?php echo '' . $URL ;?>index.php">Iniciar Juego</a>
                        <a class="collapse-item" href="<?php echo '' . $URL ;?>Views/pages/conductores.php">Conductores</a>
                        <a class="collapse-item" href="<?php echo '' . $URL ;?>Views/pages/carreteras.php">Pistas</a>
                        
                        


						
                </div>
            </li>

          
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

					<h1 class="h4 text-gray-900 mb-2">Bienvenidos a la carrera</h1>

                   
                </nav>
                <!-- End of Topbar -->

            

  
    


	<meta charset="utf-8">


	<?php 
	$auto=rand(0,6);
	$direccion="Assets/img/car_".$auto.".png";
	echo "<link rel='shortcut icon' href='$direccion'>"?>

	


	<link rel="stylesheet" type="text/css" href="<?php echo '' . $URL ;?>css/sb-admin-2.min.css">






