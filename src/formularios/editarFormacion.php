<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR FICHAS</h1>
    <br>
    <form class="container" action="../crud/editarFicha.php" method="POST">
        
        <?php
            include ('../config/conexion.php');

            $sql = "SELECT * FROM formacion WHERE ficha =".$_GET['id'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="ficha" value="<?php echo $row['ficha']; ?>">

        <!-- Nombre -->
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre_for']; ?>">
        </div>

        <!-- Tipo -->
        <label class="form-label">Tipo de Titulación</label>
        <select class="form-select mb-3" aria-label="Default select example" name="tipo">
            <option selected disabled>--Seleccione Tipo--</option>
            <?php
                include ("../config/conexion.php");

                $sql1 = "SELECT * FROM formacion WHERE ficha=".$row['ficha'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected disabled value='".$row1['ficha']."'>".$row1['tipo']."</option>";
            ?>
            <option>Técnico</option>
            <option>Curso corto</option>
            <option>Auxiliar</option>
            <option>Tecnólogo</option>
        </select>

        <!-- Jornada -->
        <label for="">Jornada</label>
        <select class="form-select mb-3" name="jornada">
            <option select disable> ---Seleccionar Jornada--- </option>
            <?php
                include ("../config/conexion.php");

                $sql1 = "SELECT * FROM formacion WHERE ficha=".$row['ficha'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected disabled value='".$row1['ficha']."'>".$row1['jornada']."</option>";
            ?>
            <option>Mañana</option>
            <option>Tarde</option>
            <option>Noche</option>
        </select>

        <!-- Numero de Ambiente -->
        <div class="mb-3">
            <label class="form-label">Ambiente</label>
            <input type="number" class="form-control" name="ambiente" value="<?php echo $row['numero_amb']; ?>">
        </div>

        <!-- Sede -->
            <label for="">Sede</label>
            <select class="form-select mb-3" name="sede">
                <option select disable> ---Seleccionar Sede--- </option>
                <?php
                    include ("../config/conexion.php");

                    $sql1 = "SELECT * FROM formacion WHERE ficha=".$row['ficha'];
                    $resultado1 = $conexion->query($sql1);

                    $row1 = $resultado1->fetch_assoc();

                    echo "<option selected disabled value='".$row1['ficha']."'>".$row1['sede']."</option>";
                ?>
                <option>Principal</option>
                <option>Alterna</option>
                <option>Virtual</option>
            </select>     
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Editar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>