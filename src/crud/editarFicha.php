<?php
    include_once('../config/conexion.php');

    $id = $_POST['ficha'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $jornada = $_POST['jornada'];
    $ambiente = $_POST['ambiente'];
    $sede = $_POST['sede'];

    $sql = 'UPDATE formacion SET nombre_for="'.$nombre.'", tipo="'.$tipo.'",jornada="'.$jornada.'", numero_amb="'.$ambiente.'", sede="'.$sede.'" WHERE ficha="'.$id.'"';

    if ($resultado = $conexion->query($sql)) {
        header('location:../index.php');
    }
?>