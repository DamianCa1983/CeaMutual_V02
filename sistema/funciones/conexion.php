<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'root';
    const CLAVE     = '';
    const BASE      = 'cea_turismo';

    function conectar()
    {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }
