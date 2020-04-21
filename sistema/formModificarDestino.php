<?php
		require 'funciones/conexion.php';
        require 'funciones/funcionesDestinos.php';
        $destino = verDestinoPorID();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de modificación de un destino</h1>

        <div class="card bg-light p-3">
        <form action="modificarDestino.php" method="post" enctype="multipart/form-data>
            <label for="nombre">Nombre del Destino</label>
            <input type="text" name="destNombre" class="form-control" id="nombre" value="<?= $destino['destNombre']; ?>" required>
            Imagen: <br>
        <img class="img50" src="images/productos/<?= $destino['imgDestino']; ?>">
            <input type="file" name="imgDestino" class="form-control">
        <br>
            <input type="hidden" name="idDestino"  value="<?= $destino ['idDestino'];?>">
        <br>
            <button class="btn btn-secondary">Modificar Destino</button>
            <a href="adminDestino.php" class="btn btn-outline-secondary mx-2">volver a panel de destinos</a>
        </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>