<?php
        require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesPaquetes.php';
        $paquete = listarPaquetes();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Paquetes</h1>



        <table class="table table-border table stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Paquete</th>
                    <th>Destino</th>
                    <th colspan="2">
                        <a href="formAgregarPaquete.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php 
            while( $pack = mysqli_fetch_array($paquete) ){
?>            
                <tr>
                    <td class="align-middle"><?php echo $pack['packNombre']; ?></td>
                    <td class="align-middle"><?php echo $pack['destNombre']; ?></td>
                    <td class="align-middle">
                        <a href="formModificarPaquete.php?idPaquete=<?=$pack['idPaquete']?>" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td class="align-middle">
                        <a href="formEliminarPaquete.php?idPaquete=<?=$pack['idPaquete']?>" class="btn btn-outline-secondary">
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