<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de un nuevo destino</h1>

        <div class="card bg-light p-3">
        <form action="agregarDestino.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre del Destino</label>
                <input type="text" name="destNombre" class="form-control" id="nombre" required>
            <br>
            Imagen: <br>
                <input type="file" name="imgDestino" class="form-control">
            <br>
            <button class="btn btn-secondary">Agregar Destino</button>
            <a href="adminDestino.php" class="btn btn-outline-secondary mx-2">volver a panel de Destino</a>
        </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>