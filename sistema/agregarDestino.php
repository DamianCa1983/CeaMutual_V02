<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesDestinos.php';
        $chequeo = agregarDestino();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Destino</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar el destino';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Destino agregado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminDestino.php" class="btn btn-outline-secondary">
                    volver a panel de destinos
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

