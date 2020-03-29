<?php
   

   class personaControl extends Controller{
        private $person;
        

        function __construct(){
          parent::__construct();
          $person=null;
        }
                    
        function render($ubicacion = null){
          $constr = "persona";
          if(isset($ubicacion[0])){
          $this->view->render($constr , $ubicacion[0]);
          }else{
          $this->view->render($constr, 'index');}
        }

        function validarUsuario($param = null){
          if($param == null)return;
          $idUsuario =  $param[0];
          $idContraseña =  $param[1];
          $person = $this->model->getById($idUsuario);
          if(!$person){
            echo "Usuario no registrado";
          }else{
            if($person->getUsuario() ==  $idUsuario && $person->getContrasenia() == $idContraseña ){
              $_SESSION['user'] = $person->getUsuario();
              echo true;
            }
            else{
            echo "Datos incorrectos";}
          }
        }

        function guardarUsuario($param = null){
          if($param == null)return;
          $usuario =  $param[0];
          $nombre =  $param[1];
          $email = $param[2];
          $contraseña = $param[3];

          $mensaje = "";

          if($this->model->insert(['usuario' =>  $usuario, 'nombre' => $nombre, 'correo' =>  $email, 'contrasenia' => $contraseña ])){
              $mensaje = "Registro exitoso!";
          }else{
              $mensaje = "Usuario ya registrado";
          }
          echo $mensaje;

        }

        function cambiarContraseña($param = null){
          if($param == null)return;
          $usuario =  $param[0];
          $correo =  $param[1];
          $contraseña  =  $param[2];

          $person = $this->model->getById($usuario);
          if(!$person){
            echo "Usuario no registrado";
          }else if($person->getCorreo() !=  $correo ){
            echo "Datos incorrectos";
            return;
          }
          
          $this->model->update(['usuario' =>  $usuario, 'contrasenia' => $contraseña ]);
          echo "Contraseña actualizada";


        }
   }

?>