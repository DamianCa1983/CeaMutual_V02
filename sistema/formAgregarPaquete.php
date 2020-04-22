<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesDestinos.php';
    $listaDestino = listarDestino();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de alta de un nuevo Paquete</h1>

    <form action="agregarPaquete.php" method="post" >
        Nombre del Paquete: <br>
        <input type="text" name="packNombre" class="form-control" required>
        <br>
        Destino: <br>
        <select name="idDestino" class="form-control" required>
            <option value="">Seleccione un Destino</option>
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
            <input type="text" name="detalle_1" class="form-control" required>
            <br>
         Detalle 2: <br>
                <input type="text" name="detalle_2" class="form-control" required>
            <br>
        Detalle 3: <br>
                <input type="text" name="detalle_3" class="form-control" required>
            <br>
        Detalle 4: <br>
                <input type="text" name="detalle_4" class="form-control" required>
            <br>
        Detalle 5: <br>
                <input type="text" name="detalle_5" class="form-control" required>
            <br>
        Detalle 6: <br>
                <input type="text" name="detalle_6" class="form-control" required>
            <br>
        Detalle 7: <br>
                <input type="text" name="detalle_7" class="form-control" required>
            <br>
        Detalle 8: <br>
                <input type="text" name="detalle_8" class="form-control" required>
            <br>
        Detalle 9: <br>
                <input type="text" name="detalle_9" class="form-control" required>
            <br>
            Hotel 1: <br>
                <input type="text" name="hotel_1" class="form-control" required>
            <br>
            Hotel 2: <br>
                <input type="text" name="hotel_2" class="form-control" required>
            <br>
            Hotel 3: <br>
                <input type="text" name="hotel_3" class="form-control" required>
            <br>
            Hotel 4: <br>
                <input type="text" name="hotel_4" class="form-control" required>
            <br>
            Hotel 5: <br>
                <input type="text" name="hotel_5" class="form-control" required>
            <br>
            Hotel 6: <br>
                <input type="text" name="hotel_6" class="form-control" required>
            <br>
            Hotel 7: <br>
                <input type="text" name="hotel_7" class="form-control" required>
            <br>
            Hotel 8: <br>
                <input type="text" name="hotel_8" class="form-control" required>
            <br>
            Hotel 9: <br>
                <input type="text" name="hotel_9" class="form-control" required>
            <br>
        
        <input type="submit" value="Agregar Paquete" class="btn btn-secondary mb-3">
        <a href="adminPaquete.php" class="btn btn-light mb-3">Volver al panel de Paquetes</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>