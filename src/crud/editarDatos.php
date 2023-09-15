<?php
    include_once('../config/conexion.php');

    $id = $_POST['instructor'];
    $ficha_id = $_POST['ficha_id'];

    $sql = 'UPDATE fichas SET ins_id="'.$id.'" WHERE ficha_id="'.$ficha_id.'"';

    if ($resultado = $conexion->query($sql)) {
        header('location:../index.php');
    }
?>