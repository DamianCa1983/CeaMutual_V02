
<?php
        require 'sistema/funciones/conexion.php';
        require 'sistema/funciones/funcionesDestinos.php';
        $destino = listarDestino();
        
?>


<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title>Cea Mutual | Turismo</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!--Barra de Navegación-->
<ul id="dropdown1" class="dropdown-content">
        <li><a href="turismo.html">Turismo</a></li>
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

<!--Sliders-->  
  <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      
    </div>
    <div class="carousel-item red white-text" href="#one!">
        <img src="images/slider/5.jpg" alt="">
    </div>
  </div>
<!--Sliders-->  


<div class="row ">
<?php 
            while( $dest = mysqli_fetch_array($destino) ){       
?>
<div class="card " style="width: 18rem; margin:10px">
 
  <img width="100" height="100" src="sistema/images/productos/<?php echo $dest['imgDestino'] ?>" class="card-img-top" alt="sistema/images/productos/<?php echo $dest['imgDestino'] ?>">
  <div class="card-body ">
    <h5 class="card-title"><?php echo $dest["destNombre"]; ?></h5>
    <input type="hidden" name="idDestino"  value="<?= $dest ['idDestino'];?>"> 
    <a href="detPaquete.php?idDestino=<?=$dest['idDestino']?>" class="btn btn-primary float-right">VER MAS</a>
  </div>
</div>
<?php
            }
?> 
</div>




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
  </script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  </body>
</html>