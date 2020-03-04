<?php

$tabla='fast';
$usuario='root';
$pass='';
$json = array();

try {
    $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die();
}
    $search = $_POST['search'];
    if(!empty($search)) {
    $statement = $conexion->prepare("SELECT * FROM task WHERE nombre LIKE '$search%' ");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        

    if($result){
      foreach($result as $valor) {
        $json[] = array(
           'id' => $valor['id'],
           'nombre' => $valor['nombre'],
           'descripcion' => $valor['descripcion']
         );
       }
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
   }




?>