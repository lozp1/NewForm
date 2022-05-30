<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'LoginPHP');

    if (!$db) {
        echo "No conectado";
        exit;
    }

    return $db;
}
