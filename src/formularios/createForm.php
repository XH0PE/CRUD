<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Formacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <h1 class="bg-black p-2 text-white text-center">Crea una Ficha</h1>
    <br>
    <div class="container">
        <form action="../crud/createFicha.php" method="POST">

        <!-- Numero de Ficha -->
            <div class="mb-3">
                <label class="form-label">Ficha</label>
                <input type="number" class="form-control" name="ficha">
            </div>

        <!-- Nombre de Formación -->
            <div class="mb-3">
                <label class="form-label">Nombre de la Formación</label>
                <input type="text" class="form-control" name="nombre_for">
            </div>

        
        <!-- Tipo de Formación -->
            <label for="">Tipo de Formación</label>
            <select class="form-select mb-3" name="tipo">
                <option select disable> ---Seleccionar Titulación--- </option>
                <option>Técnico</option>
                <option>Curso corto</option>
                <option>Auxiliar</option>
                <option>Tecnólogo</option>
            </select>

        <!-- Jornada -->
            <label for="">Jornada</label>
            <select class="form-select mb-3" name="jornada">
                <option select disable> ---Seleccionar Jornada--- </option>
                <option>Mañana</option>
                <option>Tarde</option>
                <option>Noche</option>
            </select>

        <!-- Ambiente -->
            <div class="mb-3">
                <label class="form-label">Numero de Ambiente</label>
                <input type="number" class="form-control" name="ambiente">
            </div>

        <!-- Sede -->
            <label for="">Sede</label>
            <select class="form-select mb-3" name="sede">
                <option select disable> ---Seleccionar Sede--- </option>
                <option>Principal</option>
                <option>Alterna</option>
                <option>Virtual</option>
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