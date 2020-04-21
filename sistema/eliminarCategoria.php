<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesCategorias.php';
		$chequeo = eliminarCategoria();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Borrado de una Categoria</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar la categoría';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Categoría eliminada correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel de Ca
            </a>
        </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>