<?php

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre,
        			   usuApellido, usuEmail,
        			   usuPass, usuEstado
                            FROM usuarios";
        $listadoUsuarios = mysqli_query($link, $sql);
        return $listadoUsuarios;
    }

 function agregarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $usuEstado = $_POST['usuEstado'];
        

        $link = conectar();
        $sql = "INSERT INTO usuarios
                        ( usuNombre, usuApellido,
                          usuEmail, usuPass, usuEstado)
                    VALUES
                        ( '".$usuNombre."', '".$usuApellido."',
                    	  '".$usuEmail."', '".$usuPass."',
                    	  '".$usuEstado."')";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    function verUsuarioPorID()
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql = "SELECT idUsuario, 
                        usuNombre, usuApellido,
                        usuEmail, usuPass,
                        usuEstado
                    FROM usuarios
                    WHERE idUsuario = ".$idUsuario;

        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        $detalle = mysqli_fetch_array($resultado);
        return $detalle;        
    }

    function eliminarUsuario()
    {
        $idUsuario = $_POST['idUsuario'];
        $link = conectar();
        $sql = "DELETE FROM usuarios
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));

        return $resultado;
    }

function login()

    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido 
                   FROM usuarios 
                    where usuEmail = '".$usuEmail."' 
                    and usuPass = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql) 
             or die(mysqli_error($link));
        $chequeo = mysqli_num_rows($resultado);

        if ($chequeo == 0) {
         //redireccion formLogin.php
            header('location: formLogin.php?error=1');
     } else {
         //rutina de autentificacion
         session_start();
            $_SESSION['login'] = 1;
            $usuario = mysqli_fetch_array($resultado);
            $_SESSION['usuNombre'] = $usuario['usunombre'];
            $_SESSION['usuApellido'] = $usuario['usuApellido'];
            //redireccion admin.php
            header('location: admin.php');
        }
        
    }

    function logout()
    {
        session_destroy();
        header ('refresh: 2; url=index.php');
    }
