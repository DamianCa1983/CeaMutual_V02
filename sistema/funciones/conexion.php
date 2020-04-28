<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'w1421783_cea_tur';
    const CLAVE     = 'ChLdo1983';
    const BASE      = 'w1421783_cea_tur';

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
