<?php
		require 'funciones/conexion.php';
		require 'funciones/funcionesUsuarios.php';
		$chequeo = eliminarUsuario();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Confirmación de Eliminar Usuario</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar el Usuario';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Usuario eliminado correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                    volver a panel de Usuarios
            </a>
        </div>



    </main>

<?php  include 'includes/footer.php';  ?>