<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesPaquetes.php';
        $chequeo = agregarPaquete();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nuevo Paquete</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar el Paquete';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Paquete agregado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminPaquete.php" class="btn btn-outline-secondary">
                    volver a panel de Paquetes
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>