<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel de Control</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/panelaui.css">
</head>

<body>
    <div id="Navbar">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link disabled">Bienvenido Admin</a>
            </li>
            <li class="nav-item">
                <a href="../includes/logout.user.inc.php" class="nav-link">Cerrar sesión</a>
            </li>
        </ul>
    </div>
    <div id="wrapper">
        <div class="container">
            <ul id="TabBar" class="nav nav-tabs">
                <li><a data-toggle="tab" href="#menu1">Usuarios</a></li>
                <li><a data-toggle="tab" href="#menu2">Reservaciones</a></li>
                <li><a data-toggle="tab" href="#menu3">Horarios</a></li>
                <li><a data-toggle="tab" href="#menu4">Estados de tren</a></li>
            </ul>
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                    <div class="jumbotron ajustes">
                        <h1 class="display-4">Usuarios</h1>
                        <form class="border p-3 form" action="../includes/search.username.inc.php">
                            <div class="form-group">
                                <h1 class="lead">Buscar usuario</h1>
                                <input class="form-control mr-sm-2 searchbar" name="SearchEmail" type="search" placeholder="Ingrese el correo" aria-label="Search" style="color: #56BDA2">
                                <button class="btn btn-outline-success my-2 my-sm-0 searchbarbtn" type="submit"><i class="fas fa-search"></i></button>
                                <hr>
                            </div>
                        </form>
                        <div class="form-group">
                            <?php include('../includes/load.username2.php'); ?>
                            <hr>
                            <h1 class="lead">Usuario:</h1>
                            <input type="text" value="<?php echo $nombreUsuario ?>">
                            <h1 class="lead">Primer Apellido:</h1>
                            <input type="text">
                            <h1 class="lead">Segundo Apellido:</h1>
                            <input type="text">
                            <h1 class="lead">Cédula:</h1>
                            <input type="text">
                            <h1 class="lead">Correo:</h1>
                            <input type="text">
                            <h1 class="lead">Contraseña:</h1>
                            <input type="password">
                            <h1 class="lead">Confirmar contraseña:</h1>
                            <input type="password">
                            <h1 class="lead">Fecha de nacimiento:</h1>
                            <input type="date">
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="jumbotron ajustes">
                        <h1 class="display-4">Reservas</h1>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div class="jumbotron ajustes">
                        <h1 class="display-4">Horarios</h1>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <div class="jumbotron ajustes">
                        <h1 class="display-4">Estado de tren</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>