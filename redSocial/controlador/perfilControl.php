<?php
   

   class perfilControl extends Controller{
        

        function __construct(){
          parent::__construct();
        }
                    
        function render($ubicacion){
          $constr = "perfil";
          $this->view->render($constr, $ubicacion[0]);
        }
        
        function cerrarSesion(){
            unset($_SESSION['user']);
            session_destroy();
            header('Location: http://localhost/redSocial/personaControl');
         }
        
   }

?>