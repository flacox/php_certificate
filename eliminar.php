<?php 

	
include ("conexion.php");
	
$id = $_REQUEST['id'];

$stm = $pdo->prepare("DELETE FROM estudiante WHERE id= :id"); 
$stm->bindParam(':id', $id); 
$stm->execute(); 

header("location: index.php"); ?>

 ?>