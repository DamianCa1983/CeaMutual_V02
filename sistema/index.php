<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesPaquetes.php';
        $paquete = listarPaquetes();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

<main class="container">
        <h1>Catálogo de Paquetes</h1>

<?php
     while($pack = mysqli_fetch_assoc($paquete)){ 
?>
<div class="card" style="width: 18rem;">
        <div class="card-body text-white bg-info">
    <h5 class="card-title">PAQUETE: <?= $pack['packNombre'];?></h5>
    <h5 class="card-title">DESTINO: <?= $pack['destNombre'];?></h5>

  </div>
</div>

<?php
}
?>


</main>

<?php  include 'includes/footer.php';  ?>