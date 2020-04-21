<?php
        require 'autenticar.php';
        require 'funciones/funcionesUsuarios.php';
        logout();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Salir de sistema</h1>
        <h3>Gracias <?=$_SESSION['usuNombre'];?><?=$_SESSION['usuApellido'];?> por su visita</h3>
    </main>

<?php  include 'includes/footer.php';  ?>