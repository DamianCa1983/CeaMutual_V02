<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $chequeo = agregarCategoria();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva Categoria</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar Categoría';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Categoría agregada correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel de marcas
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

