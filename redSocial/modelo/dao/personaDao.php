<?php


require 'modelo/dto/personaDto.php'; 
class personaDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }

    public function insert($datos){
    $person = new personaDto($datos['usuario'], $datos['nombre'], $datos['correo'], $datos['contrasenia']);
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO PERSONA (usuario, nombre, correo, contrasenia) VALUES (:usuario, :nombre, :correo, :contrasenia)');
        try{
            $query->execute([
                'usuario' => $person['usuario'],
                'nombre' => $person['nombre'],
                'correo' => $person['correo'],
                'contrasenia' => $person['contrasenia']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
    }

    public function getById($usuario){
     
      $item = [];
      $person = null;
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM PERSONA WHERE usuario = :usuario');
            $query->execute(['usuario' => $usuario]);    
            while($row = $query->fetch()){
                $item = [
                    "usuario" => $row['usuario'],
                    "nombre" =>  $row['nombre'],
                    "correo" =>  $row['correo'],
                    "contrasenia" => $row['contrasenia']
                ];
            }
            if(!empty($item)){
            $person = new personaDto($item["usuario"], $item['nombre'], $item['correo'], $item['contrasenia']);}
            //echo var_dump($person);
            return $person;
        }catch(PDOException $e){
            return null;
        }
    }
}

?>