<?php

$tabla='fast';
$usuario='root';
$pass='';


try {
    $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
    //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die();
}

if(isset($_POST['nombre'])){
    $task_name = $_POST['nombre'];
    $task_description = $_POST['descripcion'];

    $statement = $conexion->prepare("INSERT into task(nombre, descripcion) VALUES ('$task_name', '$task_description')");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
   

    if(!Empty($result)) {
        die('Query Failed.');
    }
    
    echo "Task Added Successfully";  
        
}


?>