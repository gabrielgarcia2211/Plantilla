<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Angie</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <link rel="shortcut icon" href="https://img.icons8.com/color/48/000000/fenix.png" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilos.css">

</head>


<body>
    <nav class="navbar navbar-light">
        <div> 
        <a class="navbar-brand" href="#">
                <img src="https://img.icons8.com/color/45/000000/fenix.png" class="d-inline-block align-top" alt="">
                <p style = "display:inline; color:white;"><?php echo "Bienvenido, " . strtoupper($_SESSION['user']); ?></p>
            </a>
        </div>
        <div>
            <p style="color: #FFFFFF;"> Mi red social</p>
        </div>
        <div>
            <a href="<?php echo constant('URL')?>perfilControl/cerrarSesion">
                <img src="<?php echo constant('URL')?>public/icon/log-out.svg" alt="">
            </a>
        </div>
    </nav>

    <div class="container">
    <div class="row">
        <div class="container col-lg-6 col-sm-12 padding-info" style="align-items: center;">
            <div style="padding-left: 35%;">
                <img class="image-perfil"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/18118684_1242522959180103_3359169384725308706_n.jpg?_nc_cat=105&_nc_sid=85a577&_nc_oc=AQm1XtsqswOh4wu7OgT_BUA-t81QkbQ0_xiCGsQFw2avTPa6A1OJpsiucDy76hvN9jg&_nc_ht=scontent.fbga2-1.fna&oh=935169b5f771429b65cc1c4efbc74a1f&oe=5EA1F171"
                    alt="">
            </div>
        </div>
        <div class="padding-info container col-lg-6 col-sm-12">
            
                <h3>Angela Acevedo</h3>
                <h6>@elniñodanilin</h6>
                <h6>CUCUTA - COLOMBIA</h6>
                <h6>GUARACHERA</h6>
                <h6>angelita@gmail.com</h6>
            
        </div>

        <div class="container col-lg-6 col-sm-12 padding-info " style="padding-left: 26%;">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-success">Seguir</button>
                <button type="button" class="btn btn-danger">Bloquear</button>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Más opciones
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Enviar mensaje</a>
                        <a class="dropdown-item" href="#">Dar un toque</a>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </div>
    <div class="container">

        <div class="card-group">

            <div class="card objetfit">
                <img class="card-img-top"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/38139435_2035412486510929_2011373939661471744_n.jpg?_nc_cat=111&_nc_sid=13bebb&_nc_oc=AQkn6c-FOnohiiEWjjV5zMUOgAvbfZ4m_UMf7InvVb1aaIa-4Fjcl33CIRElZWWL-QQ&_nc_ht=scontent.fbga2-1.fna&oh=e7f90d86eace3c267186fc80dfbbde56&oe=5E9E7853"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card objetfit">
                <img class="card-img-top"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/38139435_2035412486510929_2011373939661471744_n.jpg?_nc_cat=111&_nc_sid=13bebb&_nc_oc=AQkn6c-FOnohiiEWjjV5zMUOgAvbfZ4m_UMf7InvVb1aaIa-4Fjcl33CIRElZWWL-QQ&_nc_ht=scontent.fbga2-1.fna&oh=e7f90d86eace3c267186fc80dfbbde56&oe=5E9E7853"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card objetfit">
                <img class="card-img-top"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/38139435_2035412486510929_2011373939661471744_n.jpg?_nc_cat=111&_nc_sid=13bebb&_nc_oc=AQkn6c-FOnohiiEWjjV5zMUOgAvbfZ4m_UMf7InvVb1aaIa-4Fjcl33CIRElZWWL-QQ&_nc_ht=scontent.fbga2-1.fna&oh=e7f90d86eace3c267186fc80dfbbde56&oe=5E9E7853"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="card-group">
            <div class="card objetfit">
                <img class="card-img-top"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/38139435_2035412486510929_2011373939661471744_n.jpg?_nc_cat=111&_nc_sid=13bebb&_nc_oc=AQkn6c-FOnohiiEWjjV5zMUOgAvbfZ4m_UMf7InvVb1aaIa-4Fjcl33CIRElZWWL-QQ&_nc_ht=scontent.fbga2-1.fna&oh=e7f90d86eace3c267186fc80dfbbde56&oe=5E9E7853"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card objetfit">
                <img class="card-img-top"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/38139435_2035412486510929_2011373939661471744_n.jpg?_nc_cat=111&_nc_sid=13bebb&_nc_oc=AQkn6c-FOnohiiEWjjV5zMUOgAvbfZ4m_UMf7InvVb1aaIa-4Fjcl33CIRElZWWL-QQ&_nc_ht=scontent.fbga2-1.fna&oh=e7f90d86eace3c267186fc80dfbbde56&oe=5E9E7853"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card objetfit">
                <img class="card-img-top"
                    src="https://scontent.fbga2-1.fna.fbcdn.net/v/t1.0-9/38139435_2035412486510929_2011373939661471744_n.jpg?_nc_cat=111&_nc_sid=13bebb&_nc_oc=AQkn6c-FOnohiiEWjjV5zMUOgAvbfZ4m_UMf7InvVb1aaIa-4Fjcl33CIRElZWWL-QQ&_nc_ht=scontent.fbga2-1.fna&oh=e7f90d86eace3c267186fc80dfbbde56&oe=5E9E7853"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>


    </div>

    <div class="card-footer text-muted">
        <p style="color: #FFFFFF;"> Mi red social - Todos los derechos reservados® 2020</p>
    </div>

</body>

</html>