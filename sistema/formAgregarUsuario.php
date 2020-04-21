<?php

        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de un nuevo Usuario</h1>

        <div class="card bg-light p-3">
        <form action="agregarUsuario.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="usuNombre" class="form-control" id="nombre" required>
            <br>
            <label for="nombre">Apellido</label>
            <input type="text" name="usuApellido" class="form-control" id="nombre" required>
            <br>
            <label for="nombre">Email</label>
            <input type="text" name="usuEmail" class="form-control" id="nombre" required>
            <br>
            <label for="nombre">Contraseña</label>
            <input type="text" name="usuPass" class="form-control" id="nombre" required>
            <br>
            <label for="nombre">Estado</label>
            <input type="text" name="usuEstado" class="form-control" id="nombre" required>
            <br>
            <button class="btn btn-secondary">Agregar Usuario</button>
            <a href="adminUsuarios.php" class="btn btn-outline-secondary mx-2">volver a panel de Usuarios</a>
        </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>