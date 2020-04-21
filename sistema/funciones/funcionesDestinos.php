<?php

    #############################
    ###### CRUD de MARCAS #######

    function listarDestino()
    {
        $link = conectar();
        $sql = "SELECT idDestino, destNombre, imgDestino
                        FROM destino";
        $listadoDestinos = mysqli_query($link, $sql);
        return $listadoDestinos;
    }

    function subirArchivo()
    {
        $ruta = 'images/productos/';
        $imgDestino = 'noDisponible.jpg';
        if ( isset($_POST['imagenOriginal']) ){
            $imgDestino = $_POST['imagenOriginal'];
        }
        if( $_FILES['imgDestino']['error'] == 0 ){
            $imgDestino = $_FILES['imgDestino']['name'];
            $imgDestinoTMP = $_FILES['imgDestino']['tmp_name'];
            move_uploaded_file($imgDestinoTMP, $ruta.$imgDestino);
        }

                return $imgDestino;
    }

    function agregarDestino()
    {
        $destNombre = $_POST['destNombre'];
        $imgDestino = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO destino
                        ( destNombre , imgDestino )
                    VALUES
                        ( '".$destNombre."' , '".$imgDestino."' )";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

   
    function checkDestino()
    {
        $idDestino = $_GET['idDestino'];
        $link = conectar();
        $sql = "SELECT 1 FROM paquete
                    WHERE idDestino = ".$idDestino;
        $result = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        $chequeo = mysqli_num_rows($result);
        return $chequeo;
    }
    
    function verDestinoPorID()
    {
        $idDestino = $_GET['idDestino'];
        $link = conectar();
        $sql = "SELECT idDestino, destNombre, imgDestino
                    FROM destino
                    WHERE idDestino = ".$idDestino;
        $result = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $detalle = mysqli_fetch_array($result);
        return $detalle;
    }

    function modificarDestino()
    {
        $idDestino = $_POST['idDestino'];
        $destNombre = $_POST['destNombre'];
        $link = conectar();
        $sql = "UPDATE destino 
                SET destNombre = '".$destNombre."',
                    idDestino = ".$idDestino."
                WHERE
                idDestino = ".$idDestino;
    $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
    return $resultado;
    }

    function eliminarDestino()
    {
        $idDestino = $_POST['idDestino'];
        $link = conectar();
        $sql = "DELETE FROM destino
                    WHERE idDestino = ".$idDestino;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }
