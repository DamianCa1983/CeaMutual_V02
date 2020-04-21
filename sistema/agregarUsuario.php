<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesUsuarios.php';
        $chequeo = agregarUsuario();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Usuario</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar Usuario';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Usuario agregado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminUsuarios.php" class="btn btn-outline-secondary">volver a panel de Usuarios</a>
                    
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

