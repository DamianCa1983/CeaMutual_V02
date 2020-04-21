<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesDestinos.php';
        $chequeo = checkDestino();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un Destino</h1>
<?php
        if( $chequeo ) {
?>
            <div class="card border-danger col-md-4">
                <div class="card-body text-danger">
                No se puede eliminar el destino
                porque tiene paquete relacionados.
                <br>
                <a href="adminDestino.php" class="btn btn-secondary mt-3">
                    volver a panel de Destino
                </a>
                </div>
            </div>
<?php
        }else {
            $destino = verDestinoPorID();
?>
            <div class="card border-danger col-md-6 mx-auto">
                <div class="card-header">
                    <h2>Confirmación de baja de un destino</h2>
                </div>
                <div class="card-body">
                    Destino: <?= $destino['destNombre']; ?>
                    <br>
                    <form action="eliminarDestino.php" method="post">
                        <input type="hidden" name="idDestino" value="<?= $destino['idDestino']; ?>">
                        <button class="btn btn-danger">Confirmar baja</button>
                        <a href="adminDestino.php" class="btn btn-secondary mt-3">
                            volver a panel de Destino
                        </a>
                    </form>
                    <script>
                        Swal.fire({
                            title: '¿desea eliminar el Destino?',
                            text: "esta acción no se puede deshacer",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d00',
                            cancelButtonColor: '#5edd8d',
                            confirmButtonText: 'Confirmar Baja',
                            cancelButtonText: 'No la voy a eliminar'
                        }).then((result) => {
                            if (!result.value) {
                                window.location = 'adminDestino.php';
                            }
                        })
                    </script>
                </div>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>