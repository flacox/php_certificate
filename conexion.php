<?php 

//$conexion = new mysqli('192.168.71.129:3306', 'root', 'password', 'escuela');


$pdo = new \PDO("mysql:host=localhost;dbname=escuela", "root", "password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);