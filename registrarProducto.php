<?php

    include("BaseDatos.php");
    
    if (isset($_POST["botonEnvio"])){
        
        //1. recibir datos:
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        

        //2. Crear un objeto de la clase BaseDatos

        //2. Sacar una copia de la clase BaseDatos
        $transaccion= new BaseDatos();
        
        //3.Crear la consulta SQL para agregar datos
        $consultaSQL="INSERT INTO usuarios(nombre,marca,precio,descripcion) VALUES ('$nombre','$marca','$precio','$descripcion')";

        //4.LLamar al metodo agregarDatos     
        $transaccion->agregarDatos($consultaSQL);

    }
?>