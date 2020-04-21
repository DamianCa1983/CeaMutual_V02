<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesProductos.php';
        $chequeo = agregarProducto();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nuevo Producto</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar el Prodcuto';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Producto agregado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminProductos.php" class="btn btn-outline-secondary">
                    volver a panel de Productos
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>