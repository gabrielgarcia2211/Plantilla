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

if(isset($_POST['id'])) {
  $task_name = $_POST['nombre']; 
  $task_description = $_POST['descripcion'];
  $id = $_POST['id'];

  $stm = $conexion->prepare("UPDATE task SET nombre = '$task_name', descripcion = '$task_description' WHERE id = '$id'");
  $stm->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
   

  if(!Empty($result)) {
      die('Query Failed.');
  }
  
  echo "Task Added Successfully";  

}

?>
