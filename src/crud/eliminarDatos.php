<?php
    include ("../config/conexion.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM fichas WHERE ficha_id = '$id'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE) {
        header ("Location: ../index.php");
    }
?>
