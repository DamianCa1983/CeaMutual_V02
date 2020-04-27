<?php
        require 'autenticar.php';
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
    <div class="card-group">
  <div class="card">
    <img src="images/img/destino.jpg" class="card-img-top mx-auto" style="max-width: 300px" alt="...">
    <div class="card-body mx-auto">
      <h5 class="card-title">Panel de Administración de Destinos</h5>
     <a href="adminDestino.php" class="btn btn-info">INGRESAR</a>
    </div>
  </div>

  <div class="card">
    <img src="images/img/paquete.jpg" class="card-img-top mx-auto" style="max-width: 300px" alt="...">
    <div class="card-body mx-auto">
      <h5 class="card-title">Panel de Administración de Paquetes</h5>
     <a href="adminPaquete.php" class="btn btn-info mx-auto">INGRESAR</a>
    </div>
  </div>

  <!--<div class="card">
    <img src="images/img/usuario.jpg" class="card-img-top" alt="...">
    <div class="card-body mx-auto">
      <h5 class="card-title">Panel de Administración de Destinos</h5>
     <a href="adminUsuarios.php" class="btn btn-info">INGRESAR</a>
    </div>
  </div>
</div>-->
    </main>

<?php  include 'includes/footer.php';  ?>