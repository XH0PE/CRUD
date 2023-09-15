<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Formacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <h1 class="bg-black p-2 text-white text-center">Agregar Formacion</h1>
    <br>
    <div class="container">
        <form action="../crud/insertarDatos.php" method="POST">

        <!-- Numero de Ficha -->
            <div class="mb-3">
                <label class="form-label">Ficha</label>
                <select class="form-select mb-3" name="ficha">
                <option select disable> ---Seleccionar la Ficha--- </option>
                <?php
                    include('../config/conexion.php');

                    $sql = $conexion->query("SELECT f.*
                                            FROM formacion f
                                            LEFT JOIN fichas fi ON f.ficha = fi.ficha
                                            WHERE fi.ficha_id IS NULL");
                    while ($resultado = $sql->fetch_assoc()) {
                        echo "<option value='".$resultado['ficha']."'>".$resultado ['ficha'].'  /  '.$resultado ['nombre_for']."</option>";
                    }
                ?>
            </select>
            </div>

        <!-- Instructor -->
            <label for="">Instructor Líder</label>
            <select class="form-select mb-3" name="instructor">
                <option select disable> ---Seleccionar Instructor--- </option>
                <?php
                    include('../config/conexion.php');

                    $sql = $conexion->query("SELECT * FROM instructor");
                    while ($resultado = $sql->fetch_assoc()) {
                        echo "<option value='".$resultado['ins_id']."'>".$resultado ['nombre'].' '.$resultado ['apellido']."</option>";
                    }
                ?>
            </select>

        <!-- Botones -->
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Agregar</button>
                <a href="../index.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>+

</body>
</html>