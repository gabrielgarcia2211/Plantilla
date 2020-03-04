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

if(isset($_POST['id'])) {
  
  $id=$_POST['id'];
  $statement = $conexion->prepare("DELETE FROM task WHERE id = $id");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  if(!Empty($result)) {
    die('Query Failed.');
  }

  echo "Task Deleted Successfully";  

}

?>
