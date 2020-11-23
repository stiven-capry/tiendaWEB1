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
                    <img src="<?php echo($usuario["foto"])?>" class="card-img-top" alt="imagen">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($usuario["nombre"])?></h5>
                        <p class="card-text"><?php echo($usuario["descripcion"])?></p>
                        <a href="eliminarProducto.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-secondary">Eliminar</a>
                        <a type="button" class="btn btn-secondary">Editar</a>
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