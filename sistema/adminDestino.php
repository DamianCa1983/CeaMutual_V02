<?php
        require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesDestinos.php';
        $destino = listarDestino();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola</title>
</head>
<body>
    


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
                    <td class="align-middle"><?php echo $dest["idDestino"]; ?></td>
                    <td class="align-middle"><?php echo $dest["destNombre"]; ?></td>
                    <td class="align-middle"><img style="width:150px" src="images/productos/<?php echo $dest['imgDestino'] ?>" ></td>
                    <td class="align-middle">
                        <a href="formModificarDestino.php?idDestino=<?= $dest['idDestino']; ?>" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td class="align-middle">
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
    </body>
</html>

<?php  include 'includes/footer.php';  ?>