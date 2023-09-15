<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "saga";

    $conexion = new mysqli($host, $user, $pass, $db);

    if (!$conexion) {
        echo 'Conexión fallida';
    }

?>