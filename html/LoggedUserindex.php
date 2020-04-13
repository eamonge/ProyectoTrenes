<?php

session_start();
$Correo = $_SESSION['Correo'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sístema Intl. de Trenes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div id="Navbar">
        <?php

        $conn = mysqli_connect("localhost", "root", "", "testdb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $conn->query("SET CHARACTER SET utf8");

        $sql = "SELECT idUsuario
                      ,Nombre
                      ,PrimerApellido
                      ,SegundoApellido
                      ,Cedula
                      ,Correo
                      ,Contrasena
                      ,FdN
                      FROM usuarios
                      WHERE Correo = '$Correo';";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $nombreUsuario = $row['Nombre'];
        }
        $conn->close();
        ?>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Bienvenido <?php echo $nombreUsuario ?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ir</a>
                <div class="dropdown-menu">
                    <a id="OptSobNos" class="dropdown-item" href="Panel.php">Panel de Control</a>
                    <a id="OptSobNos" class="dropdown-item" href="#InfoJT">Sobre nosotros</a>
                    <a id="OptServ" class="dropdown-item" href="#ServiciosIJT">Servicios</a>
                    <a id="OptMejLug" class="dropdown-item" href="#MejoresLugaresJT">Recomendaciones</a>
                    <a id="OptComent" class="dropdown-item" href="#CommentariosJT">Comentarios</a>
                </div>
            </li>
        </ul>
    </div>

    <div id="BannerDiv" class="jumbotron">
        <div id="LogoJT" class="jumbotron">
            <h1 class="display-4">Go unrestricted<br />
                Travel free<br />
                Enjoy for less.</h1>
        </div>
        <a id="VerMsLink" href="#InfoJT">
            <div id="VerMsBtn" class="jumbotron">
                <h1 class="display-4">
                    Ver más<i class="fas fa-caret-right"></i>
                </h1>
            </div>
        </a>
    </div>
    <div id="InfoJT" class="jumbotron">
        <h1 class="display-4 H1Title">¿Quiénes somos?</h1>
        <h1 class="lead H1Content">Somos una organización dedicada a transportar a las personas de capital en capital.
            <br>
            Fuimos establecidos en 1820 ante una creciente demanda de trenes a nivel internacional.
            <br>
            Nuestro servicio es inigualable a cualquier otro, con precios increíbles para poder atravesar<br>
            el mundo en la comodidad de un tren.
            <br>
        </h1>
        <h1 class="lead H1SubInfo">
            Contacto: +1 (415) 555-2671
        </h1>
        <h1 class="lead H1SubInfo">
            Correo corporativo: somostrenes@intltrain.com
        </h1>
    </div>
    <div id="ServiciosIJT" class="jumbotron">
        <h1 class="display-4">¿Qué ofrecemos?</h1>
        <div id="Cardcontainer">
            <div class="card">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-restroom fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Baños públicos</h5>
                    <p class="card-text">Ofrecemos servicios higiénicos (como baños de duchas e inodoros) para los pasajeros.</p>
                </div>
            </div>
            <div class="card">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-bed fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Servicio de descanso</h5>
                    <p class="card-text">Ofrecemos caruajes con 2 double camas para un total de 4 pasajeros por habitación.</p>
                </div>
            </div>
            <div class="card">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-utensils fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Servicio de alimentación</h5>
                    <p class="card-text">Servicio de alimentación para los 3 platos principales, con ofertas de postre al final, e inclusive merienda 24/7.</p>
                </div>
            </div>
            <div class="card">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-wifi fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Internet abordo</h5>
                    <p class="card-text">Además del servicio de entretenimiento en el caruaje especial, se ofrece internet rápido e eficaz para entretenimiento personal o para trabajos.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="MejoresLugaresJT" class="jumbotron">
        <h1 class="display-4">¡Los mejores sitios para visitar según los clientes!</h1>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="img/antigua guatemala2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Antigua</h5>
                        <p>Guatemala</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/panama_city2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ciudad Panamá</h5>
                        <p>Panamá</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/san-salvador.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>San Salvador</h5>
                        <p>El Salvador</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/washingdc.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Washington DC</h5>
                        <p>Estados Unidos</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/madrid.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Madrid</h5>
                        <p>España</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/cairo.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cairo</h5>
                        <p>Egipto</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div id="CommentariosJT" class="jumbotron">
        <h1 class="display-4">¿No confías en nuestra calidad?
            <br>
            ¡Solo lee los buenos comentarios que otros clientes han dicho sobre nosotros!
        </h1>
        <div id="Cardcontainer">
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-male fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Bernardo Juarez, 32</h5>
                    <p class="card-text">"Excelente servicio e internet constante. ¡Ventajas de tener un servicio de tren a nivel internasional!"</p>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-female fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Eudalina López, 49</h5>
                    <p class="card-text">"Me gustó mucho las ofertas turísticas ofrecidas por los países en los cuales viajamos."</p>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-female fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Karen McHalligan, 73</h5>
                    <p class="card-text">"Absolutely thrilled!"</p>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="img/pngfuel.com.png" alt="Card image cap" height="268" width="180"> -->
                <i class="fas fa-male fa-5x"></i>
                <div class="card-body">
                    <h5 class="card-title">Ahmed Shamoo, 26</h5>
                    <p class="card-text">"احببته. فريق عمل ممتاز وخدمة رائعة. سيوصي للأصدقاء في الوطن!"</p>
                    <p class="card-text"><i>Traducción a Inglés: </i>"I loved it. Excelent staff and great service. Would recommend to friends back home!"</p>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
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