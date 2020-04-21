<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de una nueva Categoría</h1>

        <div class="card bg-light p-3">
        <form action="agregarCategoria.php" method="post">
            <label for="nombre">Nombre de la Categoria</label>
            <input type="text" name="catNombre" class="form-control" id="nombre" required>
            <br>
            <button class="btn btn-secondary">Agregar Categoria</button>
            <a href="adminCategorias.php" class="btn btn-outline-secondary mx-2">volver a panel de Categorias</a>
        </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>