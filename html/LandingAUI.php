<?php
session_start();
$Correo = $_SESSION['Correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Landing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/landingaui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>

<body>
    <div id="NavBar" class="jumbotron">
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
        <h1 class="display-4">Bienvenido <?php echo $nombreUsuario?></h1>
        <h1 class="lead">¿Que desea hacer hoy?</h1>
    </div>
    <div id="ContentDiv" class="jumbotron">
        <a href="LoggedUserindexAdmin.php"><button class="btn btn-dark shadow-none">Página principal</button></a>
        <a href="PanelAUI.php"><button class="btn btn-dark shadow-none">Panel de Control</button></a>
        <a><button class="btn btn-dark shadow-none">Cerrar sesión</button></a>

    </div>

    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>