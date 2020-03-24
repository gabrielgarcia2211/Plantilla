<?php


 class App{

    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        //dividimos los parametros
        $url = explode('/', $url);

        if(empty($url[0])){
            $url[0]='persona';
            $archivoController = 'controlador/personaControl.php';
            require_once $archivoController;
            $controller = new  personaControl();
            $controller->loadModel($url[0]);
            $controller->render();

            return;
        }else if(!empty($url[0])){

            $archivoController = 'controlador/'. $url[0] .'.php';
              
            if(file_exists($archivoController)){
                require_once $archivoController;

                //inicializa el controlador ycargamos el modelo
                $controller = new $url[0];
                $url[0] = rtrim($url[0], 'Control');
                $controller->loadModel($url[0]);

                //numero de elentos del arreglo
                $nparam = sizeof($url);

                if($nparam>1){
                    if($nparam>2){
                        $param=[];
                        for($i = 2; $i<$nparam;$i++){
                            array_push($param, $url[$i]);
                        }

                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }
                else{
                    $controller->render();
                }

            }

        }
        
    }
    
 }

?>