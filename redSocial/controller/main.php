<?php

    class Main extends Controller{

            function __construct(){
                parent::__construct();
            
               // echo "<p>Nuevo Controlador Main</p>";
            }
            
            function render(){
                $this->view->render('main/index');
            }




            
    }


?>