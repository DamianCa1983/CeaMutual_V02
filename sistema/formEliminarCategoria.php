<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $chequeo = checkCategoria();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una Categoría</h1>
<?php
        if( $chequeo ) {
?>
            <div class="card border-danger col-md-4">
                <div class="card-body text-danger">
                No se puede eliminar la Categoría
                porque tiene productos relacionados.
                <br>
                <a href="adminCategorias.php" class="btn btn-secondary mt-3">
                    volver a panel de Categorías
                </a>
                </div>
            </div>
<?php
        }else {
            $categoria = verCategoriaPorID();
?>
            <div class="card border-danger col-md-6 mx-auto">
                <div class="card-header">
                    <h2>Confirmación de baja de una Categoría</h2>
                </div>
                <div class="card-body">
                    Categoria: <?= $categoria['catNombre']; ?>
                    <br>
                    <form action="eliminarCategoria.php" method="post">
                        <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']; ?>">
                        <button class="btn btn-danger">Confirmar baja</button>
                        <a href="adminCategorias.php" class="btn btn-secondary mt-3">
                            volver a panel de Categorias
                        </a>
                    </form>
                    <script>
                        Swal.fire({
                            title: '¿desea eliminar la Categoría?',
                            text: "esta acción no se puede deshacer",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d00',
                            cancelButtonColor: '#5edd8d',
                            confirmButtonText: 'Confirmar Baja',
                            cancelButtonText: 'No la voy a eliminar'
                        }).then((result) => {
                            if (!result.value) {
                                window.location = 'adminCategorias.php';
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