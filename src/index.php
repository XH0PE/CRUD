<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilladataTables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <br>
    <section class="productos">
        <div class="container">
            <h1 class="text-center h1-productos">Listado de Formaciones</h1>
        </div>
    </section>

    <section class="tablas">
        <div class="container">
            <table class="table table-bordered" id="tabla">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ficha</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Tipo de formación</th>
                        <th scope="col">Jornada</th>
                        <th scope="col">Ambiente</th>
                        <th scope="col">Sede</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("config/conexion.php");

                        $sql = $conexion->query('SELECT * FROM fichas
                            INNER JOIN instructor ON fichas.ins_id = instructor.ins_id
                            INNER JOIN formacion ON fichas.ficha = formacion.ficha');

                        while($resultado = $sql->fetch_assoc()) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $resultado ['nombre_for']?></th>
                                <th scope="row"><?php echo $resultado ['ficha']?></th>
                                <th scope="row"><?php echo $resultado ['nombre'].' '.$resultado ['apellido']?></th>
                                <th scope="row"><?php echo $resultado ['tipo']?></th>
                                <th scope="row"><?php echo $resultado ['jornada']?></th>
                                <th scope="row"><?php echo $resultado ['numero_amb']?></th>
                                <th scope="row"><?php echo $resultado ['sede']?></th>
                                <th>
                                    <a href="formularios/editarForm.php?id=<?php echo $resultado['ficha']?>" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="crud/eliminarDatos.php?id=<?php echo $resultado['ficha']?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                                </th>
                            </tr>

                    <?php

                        }
                    ?>
                </tbody>
            </table>
            <div class="container">
                <a href="formularios/agregarForm.php" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>  Agregar Formación</a>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>

    <section class="productos">
        <div class="container">
            <h1 class="text-center h1-productos">Listado de Fichas</h1>
        </div>
    </section>

    <section class="tablas">
        <div class="container">
            <table class="table table-bordered" id="tabla">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Ficha</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo de formación</th>
                        <th scope="col">Jornada</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("config/conexion.php");

                        $sql = $conexion->query('SELECT * FROM formacion');

                        while($resultado = $sql->fetch_assoc()) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $resultado ['ficha']?></th>
                                <th scope="row"><?php echo $resultado ['nombre_for']?></th>
                                <th scope="row"><?php echo $resultado ['tipo']?></th>
                                <th scope="row"><?php echo $resultado ['jornada']?></th>
                                <th>
                                    <a href="formularios/editarFormacion.php?id=<?php echo $resultado['ficha']?>" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="crud/eliminarFicha.php?id=<?php echo $resultado['ficha']?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                                </th>
                            </tr>

                    <?php

                        }
                    ?>
                </tbody>
            </table>
            <div class="container">
                <a href="formularios/createForm.php" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>  Crear Ficha</a>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a5634d85fb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilladataTables.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        let tabla = document.querySelector('#tabla');
        let datatable = new DataTable(tabla);
    </script>

</body>
</html>