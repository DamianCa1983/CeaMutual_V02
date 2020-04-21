<?php
        require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesUsuarios.php';
        $usuarios = listarUsuarios();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Usuarios</h1>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

        <table class="table table-border table stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php 
            while( $usuario = mysqli_fetch_array($usuarios) ){
?>            
                <tr>
                    <td><?php echo $usuario['idUsuario']; ?></td>
                    <td><?php echo $usuario['usuNombre']; ?></td>
                    <td><?php echo $usuario['usuApellido']; ?></td>
                    <td><?php echo $usuario['usuEmail']; ?></td>
                    <td><?php echo $usuario['usuPass'] ?></td>
                    <td><?php echo $usuario['usuEstado'] ?></td>
                    <td>
                   
                        <a href="formModificarUsuario.php?idUsuario=<?=$usuario['idUsuario']?>" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarUsuario.php?idUsuario=<?=$usuario['idUsuario']?>" class="btn btn-outline-secondary">
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