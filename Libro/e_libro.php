<?php
include('../conexion.php');

$id=$_GET['id'];
// ABRIMOS LA CONEXION A LA BD 
$conexion = conectar();

$sql = "SELECT * FROM libro WHERE id ='$id' ";

$resultado = mysqli_query($conexion,$sql);

    while($cur=mysqli_fetch_assoc($resultado)){


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container {
    width: 50%;
    margin-top: 100px;

}

    </style>
    <title>Editar Curso</title>
</head>
<body>
    <div class="container">
		<div class="card">
            <div class="card-header">
    <h1 class="text-center">Curso</h1>
            </div>
    <div class="card-body">
        <form name="formcurso" method="post" action="editar_libro.php">
        <input type="text" class="form-control" value="<?php echo $cur['id'] ?>"  name="id" >
            <div class="form-group">
                <label>Año:</label>
                <input type="text" class="form-control" value="<?php echo $cur['anio'] ?>" placeholder="Año" name="anio" >
            </div>
            <div class="form-group">
                <label>Autor:</label>
                <input type="text" class="form-control" value="<?php echo $cur['autor'] ?>" placeholder="Nombre del autor" name="autor" >
            </div> 
            <div class="form-group">
                <label>Titulo:</label>
                <input type="text" class="form-control" value="<?php echo $cur['titulo'] ?>" placeholder="Nombre del titulo" name="titulo" >
            </div> 
            <div class="form-group">
                <label>Enlace:</label>
                <input type="text" class="form-control" value="<?php echo $cur['enlace'] ?>" placeholder="Enlace" name="enlace" >
            </div> 
            <div class="form-group">
                <label>Especialidad:</label>
                <input type="text" class="form-control" value="<?php echo $cur['especialidad'] ?>" placeholder="Especialidad" name="especialidad" >
            </div> 
            <div class="form-group">
                <label>Editorial:</label>
                <input type="text" class="form-control" value="<?php echo $cur['editorial'] ?>" placeholder="Editorial" name="editorial" >
            </div> 
            <br>
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Editar</button>

        </form>
        <br>
        <div>
            <a href="../Libro/libro.php" class="btn btn-primary">Volver a Inicio</a>
        </div>
        <?php
   
}
 ?>             
</div>
</div>
</div>
</div>
</body>
</html>
 