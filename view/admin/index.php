<?php 
session_start();
# CDN de MDB 4.19.0
require_once 'cdn.html';
require_once 'cnn.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="icon" href="icon.png">
    <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR82rBvjs2SSYkIcozms5HfLTP-BMTVqW8NX-dy18jyvySkowIB82V0y8NZMVsFTnkgho&usqp=CAU"></a>
</head>
<body style="background-color:#FF5733;">
    
<header>
    
    <style>
    .navbar .navbar-brand {
      padding-top: 0;
    }

    .navbar .nav-link {
      color: #444343!important;
    }

    .navbar .button-collapse {
      padding-top: 1px;
    }

    .card-intro .card-body {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
      border-radius: 0 !important;
    }

    .card-intro .card-body h1 {
      margin-bottom: 0;
    }

    .card-intro {
      margin-top: 64px;
    }

    @media (max-width: 450px) {
      .card-intro {
        margin-top: 56px;
      }
    }

    @media (min-width: 1441px) {
      .card-intro {
        padding-left: 0 !important;
      }
    }
    </style>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
           <h2>Sistema Web de Control Escolar</h2>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            
          </ul>
 
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
          
                      <li class="nav-item">
               <button><a href="../../controller/cerrarSesion.php" style="color :#FF5733;"><b style="font-family: arial;">Cerrar sesion</b></a>   </button> </a>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

<br><br>
<center>

<div class="container my-5">


<!--Section: Content-->
<section class="dark-grey-text text-center">

  <h6 class="font-weight-normal text-uppercase font-small DARK-text mb-4">Bienvenido Administrador</h6>
  <!-- Section heading -->
 <h1 style="font-family: 'Sacramento', Arial; font-weight: bolder;"><?php echo ucfirst($_SESSION['nombre']); ?>
 </h1>
 <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png" width="100" height="100" />
  <hr class="w-header">
  <!-- Section description -->

 

  <!--First row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-3 mb-4">

      <!-- Card -->
      <a href="alumno.php" class="card hoverable">
        
        <!-- Card content -->
        <div class="card-body my-4">

            <p><img src="https://www.ebc.mx/vida-estudiantil/vinculacion-empresarial/img/icono-estudiante.png" width="100" height="100" /></p>
          <h5 class="black-text mb-0">Alumnos</h5><p>
    
          
        </div>

      </a>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 mb-4">

      <!-- Card -->
      <a href="profe.php" class="card hoverable">
        
        <!-- Card content -->
        <div class="card-body my-4">

            <p><img src="https://cdn-icons-png.flaticon.com/512/3750/3750020.png" width="80" height="80" /></p>
          <h5 class="black-text mb-0">Profesor</h5><p>
          <h6 class="black-text mb-0">Profesores registrados</h6>
          
        </div>

      </a>
      <!-- Card -->

    </div>
    <!--Grid column-->
    
    <!--Grid column-->
    <div class="col-md-3 mb-4">

      <!-- Card -->
      <a href="materia.php" class="card hoverable">
        
        <!-- Card content -->
        <div class="card-body my-4">

            <p><img src="https://assets.stickpng.com/images/580b585b2edbce24c47b276e.png"width="80" height="80" /></p>
          <h5 class="black-text mb-0">Materias</h5><p>
          <h6 class="black-text mb-0">Revision de las materias</h6>
          
        </div>

      </a>
      <!-- Card -->

    </div>
    <!--Grid column-->
    
    <!--Grid column-->
    <div class="col-md-3 mb-4">

      <!-- Card -->
      <a href="reporte.php" class="card hoverable">
        
        <!-----<div class="card-body my-4">

            <p><img src="https://cdn-icons-png.flaticon.com/512/235/235253.png"width="80" height="80" /></p>
          <h5 class="black-text mb-0">Reportes</h5><p>
          <h6 class="black-text mb-0">Genera tu reporte</h6>
        </div>

      </a>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>

  <div class="row">

<!--Grid column-->
<div class="col-md-3 mb-4">

  <!-- Card -->
  <a href="matprof.php" class="card hoverable">
    
    <!-- Card content -->
  <div class="card-body my-4">

        <p><img src="https://cdn4.iconfinder.com/data/icons/education-5-15/66/248-512.png"width="80" height="80" /></p>
      <h5 class="black-text mb-0">Materia-Profesor</h5><p>
      <h6 class="black-text mb-0">Asginar materia que impartira cada profesor</h6>
      
    </div>

  </a>
  <!-- Card -->

</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 mb-4">

  <!-- Card -->
  <a href="alumate.php" class="card hoverable">
    
    <!-- Card content -->
  <div class="card-body my-4">

        <p><img src="https://fececo.org.ar/wp-content/uploads/2022/06/personas-usuarios.png"width="80" height="80" /></p>
      <h5 class="black-text mb-0">Alumno-Materia</h5><p>
      <h6 class="black-text mb-0">Busqueda de alumnos con sus datos correspondientes</h6>
      
    </div>

  </a>
  <!-- Card -->

</center>
</body>
</html>