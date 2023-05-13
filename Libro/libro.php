<?php

include('../conexion.php');


// Abrimos la conexión a la BD 
$conexion = conectar();

$sql = 'SELECT id, anio, autor, titulo, enlace, especialidad, editorial FROM libro';

$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexión
desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Libro</title>
</head>
<body>
    <style>
        .container {
    width: 100%;
    margin-top: 100px;

}

    </style>
    <div class="container">
        <a href="l_agregar.html" class="btn btn-primary">Nuevo Libro</a>
        <a href="https://lecturasencontradas.wordpress.com/2015/05/14/las-mejores-novelas-peruanas/" class="btn btn-success">Leer Libros</a> 
        <div class="card mx-auto mt-5">
        <div class="card-header">
    <h1 class="text-center">Libro</h1>
        </div>
            <div class="card-body">
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Año</th>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th>Enlace</th>
                    <th>Especialidad</th>
                    <th>Editorial</th>

                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Recorrer el array con el resultado de la consulta
                while ($libro = mysqli_fetch_array($resultado)) {
                    $id = $libro['id'];
                    $anio = $libro['anio'];
                    $autor = $libro['autor'];
                    $titulo = $libro['titulo'];
                    $enlace = $libro['enlace'];
                    $especialidad = $libro['especialidad'];
                    $editorial = $libro['editorial'];

                    echo '<tr>';
                    echo '<td>' . $id . '</td>';
                    echo '<td>' . $anio . '</td>';
                    echo '<td>' . $autor . '</td>';
                    echo '<td>' . $titulo . '</td>';
                    echo '<td><a href="' . $enlace . '">' . $enlace . '</a></td>';
                    echo '<td>' . $especialidad . '</td>';
                    echo '<td>' . $editorial . '</td>';
                    echo '<td><a href="e_libro.php?id=' . $id . '" class="btn btn-primary">Editar</a>
                     <a href="eliminar_libro.php?id=' . $id . '" class="btn btn-primary">Eliminar</a></td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</body>
</html>