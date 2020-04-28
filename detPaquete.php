<?php
        require 'sistema/funciones/conexion.php';
        require 'sistema/funciones/funcionespaquetes.php';
        require 'sistema/funciones/funcionesdestinos.php';
        $destino = 'verDestinoPorID';
        $paquetes = mostrarPaqueteWeb();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<meta charset="UTF-8″">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Cea Mutual | Turismo</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!--Barra de Navegación-->
  <ul id="dropdown1" class="dropdown-content">
        <li><a href="turismo.php">Turismo</a></li>
        <li><a href="capacitacion.html">Capacitación</a></li>
        <li><a href="cartilla.html">Cartilla Médica</a></li>
        <li><a href="artHogar.html">Artículos para el Hogar</a></li>
        <li><a href="optica.html">Óptica</a></li>
        <li><a href="recDep.html">Recreación y Deportes</a></li>
    <li class="divider"></li>
  </ul>
  <nav>
    <div class="nav-wrapper">
      <img   style="padding-left: 100px;"src="images/Logo.jpg" alt="">
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">Nosotros</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </div>
  </nav>
<!--Barra de Navegación-->


<div class="parallax-container">
    <div class="parallax"><img src="images/slider/6.jpg"></div>
</div>




<?php 
  while( $pack = mysqli_fetch_array($paquetes) ){
?> 
<div class="section white">
  <div class="row container" >
    <div class="input-field col s6"  style="background-color: #F8F8F8; border:grey solid, 1px">
    <h4 class="header">Paquete: <span> <?= $pack['packNombre']; ?></h4>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_1'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_2'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_3'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_4'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_5'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_6'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_7'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_8'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['detalle_9'];?> </h6>
        <br>
        <a class="waves-effect deep-purple darken-4 btn-large" href="formConsultaTurismo.html"><i class="material-icons right">arrow_forward</i>CONSULTAR</a>
  </div>
  <div class="input-field col s6" style="background-color: #ECECEC">
    <h4 class="header">Hoteles</h4>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_1'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_2'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_3'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_4'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_5'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_6'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_7'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_8'];?> </h6>
        <h6  class="black-text"> <span class="card-title activator black-text">- </span> <?= $pack['hotel_9'];?> </h6>
  </div>
  </div>
</div>

<?php
            }
?>





         

  <footer class="page-footer light-blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Cea Mutual</h5>
          <p class="grey-text text-lighten-4">Asociación Mutual de la Confederación de Educadores Argentinos</p>
        </div>
        <div class="col l3 s12">
         <!-- <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>-->
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Menú</h5>
          <ul>
            <li><a class="white-text" href="index.html">Home</a></li>
            <li><a class="white-text" href="about.html">Nosotros</a></li>
            <li><a class="white-text" href="servicios.html">Servicios</a></li>
            <li><a class="white-text" href="contacto.html">Contactos</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://dyl360.com.ar">DyL360</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>  $(".dropdown-trigger").dropdown();</script>
  <script>  
   var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
  });

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
  });

  

  // Or with jQuery

  $(document).ready(function(){
    $('.parallax').parallax();
  });
  </script>


  </body>
</html>