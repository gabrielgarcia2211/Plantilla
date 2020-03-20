<?php


        class View{

            function __construct(){
                //echo "<p>Controlador Vista</p>";
            }

            function render($nombre){
                require 'view/'. $nombre . '.php';
            }


        }




?>