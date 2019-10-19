<?php


function buscarCarrera(){
    $postdata = file_get_contents("php://input");
    $carrera = json_decode($postdata);
    print_r($carrera);
    echo 'Carrera encontrada!';
}

function guardarCarrera(){
    $postdata = file_get_contents("php://input");
    $data = json_decode($postdata, true);

    $cn = getConexion();
    $stm = $cn->prepare("INSERT INTO carrera (nombre) VALUES (:nombre)");
    $stm->bindParam(":nombre", $data["nombre"]);
    $data = $stm->execute();
    echo 'Carrera Guardada!';
}

function eliminarCarrera(){
    $postdata = file_get_contents("php://input");
    $data = json_decode($postdata, true);
    
    $cn = getConexion();
	$stm = $cn->prepare("DELETE FROM carrera WHERE id= :id"); 
	$stm->bindParam(':id',  $data["id"]); 
    $data = $stm->execute();
    echo 'Carrera Eliminada!';
}

require('conexion_universidad.php');

$method = $_SERVER["REQUEST_METHOD"];

switch ($method){
    case 'POST':
        guardarCarrera();
        break;

    case 'GET':
        buscarCarrera();
        break;

    case 'PUT':
        //
        break;

    case 'DELETE':
        eliminarCarrera();
        break;
        
     default:
        echo 'To be implemeted';   
}