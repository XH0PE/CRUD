<?php
    include ("../config/conexion.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM formacion WHERE ficha= '$id'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE) {
        header ("Location: ../index.php");
    }
?>
