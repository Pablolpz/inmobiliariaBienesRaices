<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', '1986', 'bienesraices_crud');

    if(!$db) {
        echo "Error de Conexion a Base de Datos";
        exit;
    }
    return $db;
}