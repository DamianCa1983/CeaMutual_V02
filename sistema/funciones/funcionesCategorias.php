<?php

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                            FROM categorias";
        $listadoCategorias = mysqli_query($link, $sql);
        return $listadoCategorias;
    }


    function agregarCategoria()
    {
        $catNombre = $_POST['catNombre'];

        $link = conectar();
        $sql = "INSERT INTO categorias
                        ( catNombre )
                    VALUES
                        ( '".$catNombre."' )";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    } 
    
    function checkCategoria()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT 1 FROM productos
                    WHERE idCategoria = ".$idCategoria;
        $result = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        $chequeo = mysqli_num_rows($result);
        return $chequeo;
    }
    
    function verCategoriaPorID()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias
                    WHERE idCategoria = ".$idCategoria;
        $result = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $detalle = mysqli_fetch_array($result);
        return $detalle;
    }

    function modificarCategoria()
    {
        $idCategoria = $_POST['idCategoria'];
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "UPDATE categorias 
                SET catNombre = '".$catNombre."',
                    idcategoria = ".$idCategoria."
                WHERE
                    idCategoria = ".$idCategoria;
    $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
    return $resultado;
    }
        
    function eliminarCategoria()
    {
        $idCategoria = $_POST['idCategoria'];
        $link = conectar();
        $sql = "DELETE FROM categorias
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }
    