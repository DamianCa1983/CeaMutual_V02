<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesPaquetes.php';
		$chequeo = eliminarPaquete();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Confirmación de Eliminar Paquete</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar el Paquete';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Paquete eliminado correctamente';
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