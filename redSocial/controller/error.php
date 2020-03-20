<?php

    class controlError extends Controller{


        function __construct(){
            parent::__construct();
            $this->view->mensaje="No existe la pgina";
            $this->view->render('error/index');
            //echo "<p>Error al cargar recurso</p>";
        }



    }

?>