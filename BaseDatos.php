<?php  

class BaseDatos{

//VARIABLES == ATRIBUTOS
public $usuarioBD="root";
public $passwordBD="";

//FUNCION ESPECIAL PARA SACAR COPIAS DE LA CLASE(EL CONSTRUCTOR)
public function __construct(){}


//FUNCIONES==METODOS
public function conectarBD(){

    try{

        $infoBD="mysql:host=localhost;dbname=tiendaweb1";
        $conexionBD= new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
        return($conexionBD);

    }catch(PDOException $error){

        echo($error->getMessage());

    }
}

public function agregarDatos($consultaSQL){

    //1. Conectarme a la BD
    $conexionBD=$this->conectarBD();

    //2. Preparar la consulta
    $consultaAgregarDatos= $conexionBD->prepare($consultaSQL);

    //3. Ejecutar la consulta
    $resultado=$consultaAgregarDatos->execute();

    //4. verifique el resultado
    if($resultado){
        echo("Registro agregado con éxito");
    }else{
        echo("Error agregando el registro");
    }
}

public function buscarDatos($consultaSQL){

    //1. Conectarme a la BD
    $conexionBD=$this->conectarBD();

    //2. Preparar la consulta
    $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

    //3. Indicar cual es el metodo para tarer los datos
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //4. Ejecutar la consulta
    $consultaBuscarDatos->execute();

    //5. Retornar los datos consultados
    return($consultaBuscarDatos->fetchAll());

}

}

?>