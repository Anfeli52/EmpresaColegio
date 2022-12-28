<?php

session_start();
include '../conexion.php';

$user = $_SESSION['correo'];

if($user==null || $user==""){
    header('location:../../HTML/login.html');
}else{
    $sql = "SELECT * FROM usuarios WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username=$data['username'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/User/userMainPageStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.tidio.co/0xm4bymhhmxmiwe8qrrlxsjxzvyi2nkl.js" async></script>
    <title>Inicio</title>
</head>
<body>
    <div class="loader">
        <div></div>
    </div>
    <div class="page">
        <header>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="#" class="logo">
                            <img src="../../IMG/Pingüino asesino.jpg" alt="">
                            <span class="navItemUser">
                                <?php echo $username ?>
                            </span>
                        </a>
                    </li>
                    <li><a href="#">
                        <i class="fas fa-home"></i>
                        <span class="navItemUser">Inicio</span>
                    </a></li>
                    <li><a href="contaminacionUserPage.php">
                        <i class="fas fa-radiation"></i>
                        <span class="navItemUser">Contaminación</span>
                    </a></li>
                    <li><a href="campanasUserPage.html">
                        <i class="fas fa-tags"></i>
                        <span class="navItemUser">Campañas</span>
                    </a></li>
                    <li><a href="recomendationUserPage.html">
                        <i class="fas fa-tasks"></i>
                        <span class="navItemUser">Recomendaciones</span>
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
            <div class="fondo">
                <h1>¿Quienes Somos?</h1>
            </div>
            <div class="contenedor">
                <div class="quienesSomos">
                    <div class="queEsYaxja">
                        <h2>¿Qué es YAXJA?</h2>
                        <img src="../../IMG/logoYaxja.jpeg" alt="">
                        
                        <div class="yaxja">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dicta reiciendis, error fuga ducimus dolorum incidunt autem rerum eum corrupti assumenda modi aspernatur sint quia! Enim odio perferendis voluptatibus itaque!</p>
                        </div>
                    </div>
                    
                    <div class="personal">
                        <div class="contenedorPersonal">
                            <h1>Personal</h1>
                        </div>
                        <div class="whoIsLucio">
                            <label>
                                <input type="checkbox">
                                <div class="flip-card">
                                    <div class="front">
                                        <div class="front">
                                            <img src="../../IMG/Lucio.jpeg" alt="">
                                            <h1>Juan Idrobo</h1>
                                            <h2>Marketing</h2>
                                            <b>jslucio100@gmail.com</b>
                                            <p>Click to flip</p>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <h1>Sobre Mi</h1>
                                        <hr>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, neque? Facilis repudiandae beatae adipisci? Consequuntur nam omnis assumenda cum praesentium.</p>
                                        <hr>
                                        <p class="click">Click to flip</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="whoIsLuis">
                            <label>
                                <input type="checkbox">
                                <div class="flip-card">
                                    <div class="front">
                                        <img src="../../IMG/Luis.jpeg" alt="">
                                        <h1>Luis Calderón</h1>
                                        <h2>Diseño</h2>
                                        <b>lccalderon1218@gmail.com</b>
                                        <p>Click to flip</p>
                                    </div>
                                    <div class="back">
                                        <h1>Sobre Mi</h1>
                                        <hr>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, neque? Facilis repudiandae beatae adipisci? Consequuntur nam omnis assumenda cum praesentium.</p>
                                        <hr>
                                        <p class="click">Click to flip</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="whoIsSoto">
                            <label>
                                <input type="checkbox">
                                <div class="flip-card">
                                    <div class="front">
                                        <img src="../../IMG/Soto.jpeg" alt="">
                                        <h1>Juan Soto</h1>
                                        <h2>Líder</h2>
                                        <b>Juanesteban9283@gmail.com</b>
                                        <p>Click to flip</p>
                                    </div>
                                    <div class="back">
                                        <h1>Sobre Mi</h1>
                                        <hr>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, neque? Facilis repudiandae beatae adipisci? Consequuntur nam omnis assumenda cum praesentium.</p>
                                        <hr>
                                        <p class="click">Click to flip</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="whoIsMedina">
                            <label>
                                <input type="checkbox">
                                <div class="flip-card">
                                    <div class="front">
                                        <img src="../../IMG/Anonimo.webp" alt="">
                                        <h1>Andrés Medina</h1>
                                        <h2>Programador</h2>
                                        <b>anfeli201111@gmail.com</b>
                                        <p>Click to flip</p>
                                    </div>
                                    <div class="back">
                                        <h1>Sobre Mi</h1>
                                        <hr>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, neque? Facilis repudiandae beatae adipisci? Consequuntur nam omnis assumenda cum praesentium.</p>
                                        <hr>
                                        <p class="click">Click to flip</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        $(window).on('load',function(){
            $(".loader").fadeOut(1000);
            $(".page").fadeIn(1000);
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>