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



$id = $_POST['id'];
$statement = $conexion->prepare("SELECT * from task WHERE id = $id");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);


if(Empty($result)) {
    die('Query Failed.');
}

   $json = array();
    foreach($result as $res){
        $json[] = array(
            'id'=> $res['id'],
            'nombre' => $res['nombre'],
            'descripcion' => $res['descripcion']
        );
    }
    $JString = json_encode($json[0]);
    echo $JString;

?>