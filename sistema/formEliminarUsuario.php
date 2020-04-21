<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesUsuarios.php';
        $usuario = verUsuarioPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
            <div class="card border-danger col-md-6 mx-auto mb-3">
                <div class="card-header border-danger">
                    <h1>Confirmación de baja de un Usuario</h1>
                </div>
                <div class="card-body text-danger">
                    Nombre: <?= $usuario['usuNombre']; ?>
                    <br>
                    Apellido: <?= $usuario['usuApellido']; ?>
                    <br>
                    Email: <?= $usuario['usuEmail']; ?>
                    <br>
                    Contraseña: <?= $usuario['usuPass']; ?>
                    <br>
                    Estado: <?= $usuario['usuEstado']; ?>
                    <form action="eliminarUsuario.php" method="post">
                        <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario']; ?>">
                        <button class="btn btn-danger">Eliminar Usuario</button>
                        <a href="adminUsuario.php" class="btn btn-outline-secondary">
                               Volver a panel de Usuarios
                        </a>
                    </form>
                </div>
            </div>
    </main>

    <script>
        Swal.fire({
            title: '¿desea eliminar el Usuario?',
            text: "esta acción no se puede deshacer",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d00',
            cancelButtonColor: '#5edd8d',
            confirmButtonText: 'Confirmar Baja',
            cancelButtonText: 'No lo voy a eliminar'
        }).then((result) => {
            if (!result.value) {
                window.location = 'adminUsuarios.php';
            }
        })
    </script>


<?php  include 'includes/footer.php';  ?>