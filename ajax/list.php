<?php

$tabla='fast';
$usuario='root';
$pass='';
$json = array();

try {
    $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
    //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die();
}

    $statement = $conexion->prepare("SELECT * FROM task");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);


    
    if(Empty($result)) {
        die('Query Failed:'. $conexion->errorInfo());
    }
   
    $json = array();
    foreach($result as $res){
        $json[] = array(
            'id'=> $res['id'],
            'nombre' => $res['nombre'],
            'descripcion' => $res['descripcion']
        );
    }

    $JString = json_encode($json);
    echo $JString;




?>
