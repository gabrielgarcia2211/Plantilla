<?php


   class personaControl extends Controller{

        function __construct(){
          parent::__construct();
        }
                    
        function render(){
          $this->view->render('persona/index');
        }  

        function validarUsuario($param){
          $idUsuario =  $param[0];
          $idContraseña =  $param[1];
          $person = $this->model->getById($idUsuario);
          if(!$person){
            echo "Usuario no registrado";
          }else{
            if($person->getUsuario() ==  $idUsuario && $person->getContrasenia() == $idContraseña )
            echo "Logeado";
            else
            echo "datos incorrectos";
          }
        }
   }

?>