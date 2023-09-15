<?php
include ("../Config/Conexion.php");

$ficha = $_POST['ficha'];
$ficha_id = $_POST['ficha'];
$nombre_for = $_POST['nombre_for'];
$tipo = $_POST['tipo'];
$jornada = $_POST['jornada'];
$ambiente = $_POST['ambiente'];
$sede = $_POST['sede'];

$sql = 'INSERT INTO formacion(ficha, nombre_for, tipo, jornada, numero_amb, sede)
            VALUES("'.$ficha.'", "'.$nombre_for.'", "'.$tipo.'", "'.$jornada.'", "'.$ambiente.'", "'.$sede.'")';

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../Index.php");
} else {
    echo "Datos NO insertados";
}

?>