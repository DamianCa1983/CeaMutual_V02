<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesPaquetes.php';
		$chequeo = modificarPaquete();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de datos de un Paquete</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo modificar el Paquete';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Paquete modificado correctamente';
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