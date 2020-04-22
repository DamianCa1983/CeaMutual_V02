<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesDestinos.php';
    require 'funciones/funcionesPaquetes.php';
    $listaDestino = listarDestino();
    $paquete = verPaquetePorID();
    include 'includes/header.html';
    include 'includes/nav.php';
?>


<main class="container">
    <h1>Formulario de modificación de un Paquete</h1>

    <form action="modificarPaquete.php" method="post" >
        Nombre del Paquete: <br>
        <input type="text" name="packNombre" class="form-control" value="<?= $paquete['packNombre'];?>"  required>
        <br>
        Destino: <br>
        <select name="idDestino" class="form-control" required>
            <option value="<?= $paquete['idDestino']; ?>"><?= $paquete['destNombre']; ?></option>
<?php
            while( $dest = mysqli_fetch_array($listaDestino) ){
?>
                <option value="<?= $dest['idDestino'] ?>"><?= $dest['destNombre']; ?></option> <br>
<?php
}
?>
        </select>
        <br>
        Detalle 1: <br>
            <input type="text" name="detalle_1" class="form-control" value="<?= $paquete['detalle_1'];?>"  required>
            <br>
         Detalle 2: <br>
                <input type="text" name="detalle_2" class="form-control" value="<?= $paquete['detalle_2'];?>" required>
            <br>
        Detalle 3: <br>
                <input type="text" name="detalle_3" class="form-control" value="<?= $paquete['detalle_3'];?>" required>
            <br>
        Detalle 4: <br>
                <input type="text" name="detalle_4" class="form-control" value="<?= $paquete['detalle_4'];?>" required>
            <br>
        Detalle 5: <br>
                <input type="text" name="detalle_5" class="form-control" value="<?= $paquete['detalle_5'];?>" required>
            <br>
        Detalle 6: <br>
                <input type="text" name="detalle_6" class="form-control" value="<?= $paquete['detalle_6'];?>" required>
            <br>
        Detalle 7: <br>
                <input type="text" name="detalle_7" class="form-control" value="<?= $paquete['detalle_7'];?>" required>
            <br>
        Detalle 8: <br>
                <input type="text" name="detalle_8" class="form-control" value="<?= $paquete['detalle_8'];?>" required>
            <br>
        Detalle 9: <br>
                <input type="text" name="detalle_9" class="form-control" value="<?= $paquete['detalle_9'];?>" required>
            <br>
            Hotel 1: <br>
                <input type="text" name="hotel_1" class="form-control" value="<?= $paquete['hotel_1'];?>" required>
            <br>
            Hotel 2: <br>
                <input type="text" name="hotel_2" class="form-control" value="<?= $paquete['hotel_2'];?>" required>
            <br>
            Hotel 3: <br>
                <input type="text" name="hotel_3" class="form-control" value="<?= $paquete['hotel_3'];?>" required>
            <br>
            Hotel 4: <br>
                <input type="text" name="hotel_4" class="form-control" value="<?= $paquete['hotel_4'];?>" required>
            <br>
            Hotel 5: <br>
                <input type="text" name="hotel_5" class="form-control" value="<?= $paquete['hotel_5'];?>" required>
            <br>
            Hotel 6: <br>
                <input type="text" name="hotel_6" class="form-control" value="<?= $paquete['hotel_6'];?>" required>
            <br>
            Hotel 7: <br>
                <input type="text" name="hotel_7" class="form-control" value="<?= $paquete['hotel_7'];?>" required>
            <br>
            Hotel 8: <br>
                <input type="text" name="hotel_8" class="form-control" value="<?= $paquete['hotel_8'];?>" required>
            <br>
            Hotel 9: <br>
                <input type="text" name="hotel_9" class="form-control" value="<?= $paquete['hotel_9'];?>" required>
            <br>
        <input type="hidden" name="idPaquete" value="<?= $paquete['idPaquete']; ?>">
        <input type="submit" value="Modificar Paquete" class="btn btn-secondary mb-3">
        <a href="adminPaquete.php" class="btn btn-light mb-3">Volver al panel de Paquetes</a>
    </form>

</main>
<?php  include 'includes/footer.php';  ?>