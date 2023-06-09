<?php

session_start();
require_once 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="icon" href="assets/images/service-item-01.png" />
    <title>GESTORACTIVE</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
        h1 {
            text-transform: uppercase;
        }
    </style>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            GESTORACTIVE
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        <li class="scroll-to-section"><a href="welcome.php" class = "active">Mi perfil</a></li>  
                        <li class="scroll-to-section"><a href="logout.php">Cerrar sesión</a></li>  
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
   

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
            <img src="assets/images/slide-01.jpg" alt="">
                <div class="text-content">

                <h3 class="text-center">Bienvenid@</h3>
                <br>
                <?php
                    echo "<h1>";
                    echo $_SESSION['user'];
                    echo "</h1>";
                    echo "<br>";
                    echo "<br>";
                    date_default_timezone_set('America/Mexico_City');
                    echo "<h3 class = 'text-center'>La fecha actual es: ". date("d") . "/" . date("M") . "/" . date("Y");"</h3>";
                    

                ?>
                <br> <br>

                <h3 class = "text-center">¿Qué desea hacer?</h3> <br>

                <a href=""><button type="button" id = "config" name = "config" class = "main-button">Configuración</button></a>
                <br><br>
                <a href=""><button type="button" id = "estado" name = "estado" class = "main-button">Estado Actual de la Alarma</button></a>
				<br><br>
                <a href=""><button type="button" id = "reportes" name = "reportes" class = "main-button">Reporte histórico</button></a>
                
                </div>
            </div>
          </div>
          <!-- // Item -->
         
          <!-- // Item -->
        </div>
    </div>
    
    

<!-- ***** Footer Start ***** -->
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                <div class="left-text-content" >
                        <center><p>UNIVERSIDAD TECNOLÓGICA DE COAHUILA</p></center>
                    </div>
                </div>
            
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>