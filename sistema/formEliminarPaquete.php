<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesPaquetes.php';
        $paquete = verPaquetePorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
            <div class="card border-danger col-md-6 mx-auto mb-3">
                <div class="card-header border-danger">
                    <h1>Confirmación de baja de un Paquete</h1>
                </div>
                <div class="card-body text-danger">
                   <h2><?= $paquete['packNombre']; ?></h2>
                    Destino: <?= $paquete['destNombre']; ?>
                    <br>
                    <form action="eliminarPaquete.php" method="post">
                        <input type="hidden" name="idPaquete" value="<?= $paquete['idPaquete']; ?>">
                        <button class="btn btn-danger">Eliminar Paquete</button>
                        <a href="adminPaquete.php" class="btn btn-outline-secondary">
                               Volver a panel de Paquetes
                        </a>
                    </form>
                </div>
            </div>
    </main>

    <script>
        Swal.fire({
            title: '¿desea eliminar el Paquete?',
            text: "esta acción no se puede deshacer",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d00',
            cancelButtonColor: '#5edd8d',
            confirmButtonText: 'Confirmar Baja',
            cancelButtonText: 'No lo voy a eliminar'
        }).then((result) => {
            if (!result.value) {
                window.location = 'adminPaquete.php';
            }
        })
    </script>


<?php  include 'includes/footer.php';  ?>