<?php

    function listarPaquetes()
    {
        $link = conectar();
        $sql = "SELECT idPaquete, packNombre,
                        d.idDestino, destNombre, detalle_1,
                        detalle_2, detalle_3, detalle_4, 
                        detalle_5, detalle_6, detalle_7,
                        detalle_8, detalle_9, hotel_1,
                        hotel_2, hotel_3, hotel_4, hotel_5,
                        hotel_6, hotel_7, hotel_8, hotel_9                       
                    FROM paquete p, destino d
                    WHERE p.idDestino = d.idDestino";
        $listadoPaquetes = mysqli_query($link, $sql);
        return $listadoPaquetes;
    }

   

    function agregarPaquete()
    {
        $packNombre = $_POST['packNombre'];
        $idDestino = $_POST['idDestino'];
        $detalle_1 = $_POST['detalle_1'];
        $detalle_2 = $_POST['detalle_2'];
        $detalle_3 = $_POST['detalle_3'];
        $detalle_4 = $_POST['detalle_4'];
        $detalle_5 = $_POST['detalle_5'];
        $detalle_6 = $_POST['detalle_6'];
        $detalle_7 = $_POST['detalle_7'];
        $detalle_8 = $_POST['detalle_8'];
        $detalle_9 = $_POST['detalle_9'];
        $hotel_1 = $_POST['hotel_1'];
        $hotel_2 = $_POST['hotel_2'];
        $hotel_3 = $_POST['hotel_3'];
        $hotel_4 = $_POST['hotel_4'];
        $hotel_5 = $_POST['hotel_5'];
        $hotel_6 = $_POST['hotel_6'];
        $hotel_7 = $_POST['hotel_7'];
        $hotel_8 = $_POST['hotel_8'];
        $hotel_9 = $_POST['hotel_9'];

        $link = conectar();
        $sql = "INSERT INTO paquete
                       VALUE
                       ( 
                        NULL ,  '".$packNombre."', ".$idDestino.",
                                '".$detalle_1."', '".$detalle_2."',
                                '".$detalle_3."', '".$detalle_4."',
                                '".$detalle_5."', '".$detalle_6."',
                                '".$detalle_7."', '".$detalle_8."',
                                '".$detalle_9."', '".$hotel_1."',
                                '".$hotel_2."', '".$hotel_3."',
                                '".$hotel_4."', '".$hotel_5."',
                                '".$hotel_6."', '".$hotel_7."',
                                '".$hotel_8."', '".$hotel_9."'
                        )";
        $resultado = mysqli_query($link, $sql)
                                    or die(mysqli_error($link));
        return $resultado;                                                            
    }

    function verPaquetePorID()
    {
        $idPaquete = $_GET['idPaquete'];
        $link = conectar();
        $sql ="SELECT   idPaquete, packNombre,
                        d.idDestino, destNombre, detalle_1,
                        detalle_2, detalle_3, detalle_4, 
                        detalle_5, detalle_6, detalle_7,
                        detalle_8, detalle_9, hotel_1,
                        hotel_2, hotel_3, hotel_4, hotel_5,
                        hotel_6, hotel_7, hotel_8, hotel_9                       
    FROM paquete p, destino d
    WHERE p.idDestino = d.idDestino
    AND idPaquete = ".$idPaquete;

        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        $detalle = mysqli_fetch_array($resultado);
        return $detalle;        
    }


    function modificarPaquete()
    {
        $idPaquete = $_POST['idPaquete'];
        $packNombre = $_POST['packNombre'];
        $idDestino = $_POST['idDestino'];
        $detalle_1 = $_POST['detalle_1'];
        $detalle_2 = $_POST['detalle_2'];
        $detalle_3 = $_POST['detalle_3'];
        $detalle_4 = $_POST['detalle_4'];
        $detalle_5 = $_POST['detalle_5'];
        $detalle_6 = $_POST['detalle_6'];
        $detalle_7 = $_POST['detalle_7'];
        $detalle_8 = $_POST['detalle_8'];
        $detalle_9 = $_POST['detalle_9'];
        $hotel_1 = $_POST['hotel_1'];
        $hotel_2 = $_POST['hotel_2'];
        $hotel_3 = $_POST['hotel_3'];
        $hotel_4 = $_POST['hotel_4'];
        $hotel_5 = $_POST['hotel_5'];
        $hotel_6 = $_POST['hotel_6'];
        $hotel_7 = $_POST['hotel_7'];
        $hotel_8 = $_POST['hotel_8'];
        $hotel_9 = $_POST['hotel_9'];

        $link = conectar();
        $sql = "UPDATE paquete 
                    SET packNombre = '".$packNombre."',
                        idDestino = ".$idDestino.",
                        detalle_1 = '".$detalle_1."',
                        detalle_2 = '".$detalle_2."',
                        detalle_3 = '".$detalle_3."',
                        detalle_4 = '".$detalle_4."',
                        detalle_5 = '".$detalle_5."',
                        detalle_6 = '".$detalle_6."',
                        detalle_7 = '".$detalle_7."',
                        detalle_8 = '".$detalle_8."',
                        detalle_9 = '".$detalle_9."',
                        hotel_1 = '".$hotel_1."',
                        hotel_2 = '".$hotel_2."',
                        hotel_3 = '".$hotel_3."',
                        hotel_4 = '".$hotel_4."',
                        hotel_5 = '".$hotel_5."',
                        hotel_6 = '".$hotel_6."',
                        hotel_7 = '".$hotel_7."',
                        hotel_8 = '".$hotel_8."',
                        hotel_9 = '".$hotel_9."'
                    WHERE
                        idPaquete = ".$idPaquete;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $resultado;

    }

    function eliminarPaquete()
    {
        $idPaquete = $_POST['idPaquete'];
        $link = conectar();
        $sql = "DELETE FROM paquete
                    WHERE idPaquete = ".$idPaquete;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
 
        return $resultado;
     }
    
function mostrarPaqueteWeb()
     {
         $idDestino = $_GET['idDestino'];
         $link = conectar();
         $sql ="SELECT   idPaquete, packNombre,
                         idDestino, detalle_1,
                         detalle_2, detalle_3, detalle_4, 
                         detalle_5, detalle_6, detalle_7,
                         detalle_8, detalle_9, hotel_1,
                         hotel_2, hotel_3, hotel_4, hotel_5,
                         hotel_6, hotel_7, hotel_8, hotel_9                       
                FROM paquete
                WHERE idDestino = ".$idDestino;
 
         $resultado = mysqli_query($link, $sql);
         return $resultado;        
     }