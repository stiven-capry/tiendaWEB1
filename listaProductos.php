<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado  de prodcutos </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php 

//Hacer una consulta en BD para tarer todos los usuarios

//1. Incluir el archivo donde esta nuestra clase BaseDatos
include("BaseDatos.php");

//2. Crear la consulta SQL para buscar datos
$consultaSQL="SELECT * FROM usuarios WHERE 1";

//3. Crear un objeto de la clase BaseDatos y usar
//el metodo buscarDatos

$transaccion=new Basedatos();
$usuarios=$transaccion->buscarDatos($consultaSQL);

?>
<header>
        <h1><a href="formularioRegistro.php" class="text-secondary"> REGISTRO <a></h1>
        <hr>
        <h2 ><a href="listaproductos.php" class="text-secondary">Lista De Productos</a> </h2>
        <hr>
</header>
<div class="container">

    <br>
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($usuarios as $usuario): ?>
            
            <div class="col mb-4">
                <div class="card h-100" >
                    <img src="data:image/jpeg;base64,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" class="card-img-top" alt="imagen">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($usuario["nombre"])?></h5>
                        <p class="card-text"><?php echo($usuario["descripcion"])?></p>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-secondary">Eliminar</button>
                    </div>
                </div>
            </div>    

        <?php endforeach ?>
            
    </div>
    
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>