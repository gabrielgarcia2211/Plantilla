<?php

    class persona extends Controller{

            function __construct(){
                parent::__construct();
                $this->view->mensaje="";
               // echo "<p>Nuevo Controlador Main</p>";
            }


            function render(){
                $this->view->render('persona/login');
            }

            function validarPersona(){
                $idPersona = $_POST['usuario'];
                
                $person = $this->model->getById($idPersona);
        
                if(empty($person)){
                     // $this->view->mensaje="No existe la pgina";
                    echo '<script language="javascript">
                         alert(existe);
                    </script>';
                }else{
                    echo '<script language="javascript">
                       alert(existe);
                    </script>';
                }
                //session_start();
                //$_SESSION['id_verAlumno'] = $person->usuario;
                //$this->view->render('consulta/detalle');
            }


            

            /*
            function registrarPersona(){
                $usuario = $_POST['usuario'];
                $contrasenia    = $_POST['contrasenia'];
                $apellido  = $_POST['apellido'];

                $mensaje="";
               
               // $this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido]);
               if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
                    //header('location: '.constant('URL').'nuevo/alumnoCreado');
                  
                    $mensaje="Nuevo Alumno Creado";
                  
                }else{

                    $mensaje="La matricula ya existe";

                }

                $this->view->mensaje = $mensaje;
                $this->render();
               
            }
            */




            
    }


?>