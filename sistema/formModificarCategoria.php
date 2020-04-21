<?php
		require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $categoria = verCategoriaPorID();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario modificación de una Categoría</h1>

        <div class="card bg-light p-3">
        <form action="modificarCategoria.php" method="post">
            <label for="nombre">Nombre de la Categoría</label>
            <input type="text" name="catNombre" class="form-control" id="nombre" value="<?= $categoria['catNombre']; ?>" required>
            <br>
            <input type="hidden" name="idCategoria"  value="<?= $categoria ['idCategoria'];?>">
        <br>
            <button class="btn btn-secondary">Modificar Categoría</button>
            <a href="adminCategorias.php" class="btn btn-outline-secondary mx-2">volver a panel de Categoría</a>
        </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>