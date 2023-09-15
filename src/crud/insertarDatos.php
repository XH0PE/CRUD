<?php
include ("../Config/Conexion.php");

$ficha = $_POST['ficha'];
$instructor = $_POST['instructor'];

$sql = 'INSERT INTO fichas(ficha_id, ficha, ins_id)
            VALUES("'.$ficha.'", "'.$ficha.'", "'.$instructor.'")';

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../Index.php");
} else {
    echo "Datos NO insertados";
}

?>