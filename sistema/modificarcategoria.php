<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesCategorias.php';
		$chequeo = modificarCategoria();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de datos de una Categoría</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo modificar la Categoría';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Categoría modificada correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel de Categorías
            </a>
        </div>



    </main>

<?php  include 'includes/footer.php';  ?>