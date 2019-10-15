<?php 

include ("conexion.php");

    $nombre = $_POST['nombre'];
    $matricula = "DC-".$_POST['matricula'];
    $edad = $_POST['edad'];
    $carrera_id = $_POST['carrera_id'];

    $stm = $pdo->prepare("INSERT INTO estudiante (nombre, matricula, edad, carrera_id) VALUES (:nombre, :matricula, :edad, :carrera_id)");
    $stm->bindParam(":nombre", $nombre);
    $stm->bindParam(":matricula", $matricula);
    $stm->bindParam(":edad", $edad);
    $stm->bindParam(":carrera_id", $carrera_id);

    $data = $stm->execute();
    print_r($data);

    header("Location: index.php");

