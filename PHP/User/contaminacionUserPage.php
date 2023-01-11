<?php

session_start();
include '../conexion.php';

$user = $_SESSION['correo'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '".$user."';";
$result = $conexion->query($select);
while($datos=$result->fetch_assoc()){
    $tipoUsuario = $datos['tipoUsuario'];
}

if($user==null || $user==""){
    header('location:../../HTML/login.html');
}else if($tipoUsuario!="user"){
    header('location:../User/userMainPage.php');
}else{
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username=$data['username'];
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Buscar datos en tiempo real con PHP, MySQL y AJAX">
    <meta name="author" content="Marco Robles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/User/contaminacionUserPageStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Contaminacion</title>
    <!-- Bootstrap core CSS -->

</head>

<body>
    <div class="loader">
        <div></div>
    </div>
        <header>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="#" class="logo">
                            <img src="../../IMG/Pingüino asesino.jpg" alt="">
                            <span class="navItemUser"><?php echo $username ?></span>
                        </a>
                    </li>
                    <li><a href="userMainPage.php">
                        <i class="fas fa-home"></i>
                        <span class="navItemUser">Inicio</span>
                    </a></li>
                    <li><a href="">
                        <i class="fas fa-radiation"></i>
                        <span class="navItemUser">Contaminación</span>
                    </a></li>
                    <li><a href="campanasUserPage.html">
                        <i class="fas fa-tags"></i>
                        <span class="navItemUser">Campañas</span>
                    </a></li>
                    <li><a href="recomendationUserPage.html">
                        <i class="fas fa-tasks"></i>
                        <span class="navItemUser">Yaxjaneitor3000</span>
                    </a></li>
                    <li><a href="ajustesUserPage.html">
                        <i class="fas fa-cog"></i>
                        <span class="navItemUser">Configuración</span>
                    </a></li>
                    <!--<li><a href="contactUsUser.html">
                        <i class="fas fa-phone"></i>
                        <span class="navItemUser">Contacto</span>
                    </a></li>-->
                    <!--<li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="navItemUser">Configuración</span>
                    </a></li>-->
                    <li><a href="../../PHP/logout.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="navItemUser">Cerrar Sesión</span>
                    </a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container py-4 text-center">
                <h2>Contaminacion</h2>
                <div class="row">
                    <div class="columna">
                        <form action="" method="post">
                            <div class="container1">
                                <label for="campo"></label>
                                <input type="text" name="campo" id="campo" placeholder="Buscar">
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>Codigo Agua</th>
                                    <th>Nombre Agua</th>
                                    <th>Cuerpo de Agua</th>
                                    <th>Nivel Contaminante</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- El id del cuerpo de la tabla. -->
                            <tbody id="content">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        $(window).on('load', function () {
            $(".loader").fadeOut(1000);
            $(".page").fadeIn(1000);
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        /* Llamando a la función getData() */
        getData()
        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", getData)
        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url = "../../PHP/tablaContaminacion.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            fetch(url, {
                method: "POST",
                body: formaData
            }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>