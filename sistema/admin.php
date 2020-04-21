<?php
        require 'autenticar.php';
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración</h1>

        <div class="list-group">
            <a href="adminDestino.php" class="list-group-item">
                Panel de administración de Destinos.
            </a>
            <a href="adminCategorias.php" class="list-group-item">
                Panel de administración de Paquetes.
            </a>
            <a href="adminUsuarios.php" class="list-group-item">
                Panel de administración de Usuarios.
            </a>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>