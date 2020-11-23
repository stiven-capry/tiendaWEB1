<?php

    include("BaseDatos.php");

    //0.Recibir  el id del registro a eliminar 
    $id=$_GET["id"];
   
    //1.utilizar la base de datos (sacarle una copia a la clase)
    $transaccion= new BaseDatos();

    //2.Crear la consulta SQL para eliminar registro
    $consultaSQL="DELETE FROM usuarios WHERE idUsuario='$id'"; 

    //3.Llamar  y utilizar el metodo eliminarDato
    $transaccion->eliminarDatos( $consultaSQL);




?>
