<?php

    function listarPaquetes()
    {
        $link = conectar();
        $sql = "SELECT idPaquete, packNombre, packPrecio,
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

    function subirArchivo()
    {
        $ruta = 'images/productos/';
        $prdImagen = 'noDisponible.jpg';
        if ( isset($_POST['imagenOriginal']) ){
            $prdImagen = $_POST['imagenOriginal'];
        }
        if( $_FILES['prdImagen']['error'] == 0 ){
            $prdImagen = $_FILES['prdImagen']['name'];
            $prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
            move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
        }

                return $prdImagen;
    }

    function agregarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO productos
                       VALUE
                       ( 
                        NULL , '".$prdNombre."', ".$prdPrecio.",
                                ".$idMarca.", ".$idCategoria.",
                                '".$prdPresentacion."', ".$prdStock.",
                                '".$prdImagen."'
                        )";
        $resultado = mysqli_query($link, $sql)
                                    or die(mysqli_error($link));
        return $resultado;                                                            
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT idProducto, 
                        prdNombre, prdPrecio,
                        p.idMarca, mkNombre,
                        p.idCategoria, catNombre,
                        prdPresentacion, prdStock,
                        prdImagen
                    FROM productos p, categorias c, marcas m
                    WHERE p.idMarca = m.idMarca
                     AND p.idCategoria = c.idCategoria
                     AND idProducto = ".$idProducto;

        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        $detalle = mysqli_fetch_array($resultado);
        return $detalle;        
    }

    function modificarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo(); /* _ */

        $link = conectar();
        $sql = "UPDATE productos 
                    SET prdNombre = '".$prdNombre."',
                        prdPrecio = ".$prdPrecio.",
                        idMarca = ".$idMarca.",
                        idCategoria = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."',
                        prdStock = ".$prdStock.",
                        prdImagen = '".$prdImagen."'
                    WHERE
                        idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $resultado;

    }

    function eliminarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $prdImagen = $_POST['prdImagen'];
        $ruta = 'images/productos/'.$prdImagen;
        $link = conectar();
        $sql = "DELETE FROM productos
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        if( $prdImagen != 'noDisponible.jpg' ){
            unlink($ruta);
        }
        return $resultado;
    }

/**
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */