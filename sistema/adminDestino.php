<?php
        require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesDestinos.php';
        $destino = listarDestino();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Destinos</h1>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

        <table class="table table-border table stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Destino</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarDestino.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php 
            while( $dest = mysqli_fetch_array($destino) ){       
?>            
                <tr>
                    <td><?php echo $dest["idDestino"]; ?></td>
                    <td><?php echo $dest["destNombre"]; ?></td>
                    <td><img src="images/productos/<?php echo $dest['imgDestino'] ?>" class="img50"></td>
                    <td>
                        <a href="formModificarDestino.php?idDestino=<?= $dest['idDestino']; ?>" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarDestino.php?idDestino=<?= $dest['idDestino']; ?>" class="btn btn-outline-secondary">
                            eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?>                
            </tbody>
        </table>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>