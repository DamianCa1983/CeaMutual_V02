<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesProductos.php';
        $productos = listarProductos();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

<main class="container">
        <h1>Catálogo de Productos</h1>

    <div class="row">

<?php
        while($producto = mysqli_fetch_assoc($productos)){ 
?>

        <div class="card m-2">
            <div class="card-header">
                <?= $producto['prdNombre'];?>
            </div>
            <div class="card-body">
                <img src="images/productos/<?= $producto['prdImagen'];?>" class="img-thumbnail">
                <br>  
                <?= $producto['prdPrecio'];?>
                <br>
                <?= $producto['mkNombre'];?>
                <br>
                <?= $producto['catNombre'];?>
            </div>
        </div>
<?php
}
?>
    </div>

</main>

<?php  include 'includes/footer.php';  ?>