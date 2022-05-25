<?php
function conectarDB() : mysqli {
    $db = new mysqli('127.0.0.1', 'root', 'Gabriel1829', 'crud_deromweb');

    if(!$db){
        echo "Error de conexion";
        exit;
    }
    return $db;
}