<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR FORMACIÓN</h1>
    <br>
    <form class="container" action="../crud/editarDatos.php" method="POST">
        
        <?php
            include ('../config/conexion.php');

            $sql = "SELECT * FROM fichas WHERE ficha =".$_GET['id'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="ficha_id" value="<?php echo $row['ficha']; ?>">

        <!-- Instructor -->
        <label>Instructor Líder</label>
        <select class="form-select mb-3" aria-label="Default select example" name="instructor">
            <option selected disabled>--Seleccione Instructor--</option>
            <?php
                include ("../config/conexion.php");

                $sql1 = "SELECT * FROM instructor WHERE ins_id=".$row['ins_id'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected disabled value='".$row1['ins_id']."'>".$row1['nombre'].' '.$row1['apellido']."</option>";

                $sql2 = "SELECT * FROM instructor";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['ins_id']."'>".$Fila['nombre'].' '.$Fila['apellido']."</option>";
                }
            ?>   
        </select>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Editar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>