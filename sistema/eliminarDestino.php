<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesDestinos.php';
		$chequeo = eliminarDestino();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Borrado de un Destino</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar el Destino';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Destino Eliminado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminDestino.php" class="btn btn-outline-secondary">
                    volver a panel de Destinos
            </a>
        </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>