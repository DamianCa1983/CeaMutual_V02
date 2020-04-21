<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesDestinos.php';
		$chequeo = modificarDestino();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de datos de una Marca</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo modificar el Destino';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Destino modificado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminDestino.php" class="btn btn-outline-secondary">
                    volver a panel de Destino
            </a>
        </div>



    </main>

<?php  include 'includes/footer.php';  ?>