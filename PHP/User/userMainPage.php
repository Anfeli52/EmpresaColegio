<?php

session_start();
include '../conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '".$user."';";
$result = $conexion->query($select);
while($datos=$result->fetch_assoc()){
    $tipoUsuario = $datos['tipoUsuario'];
}

if($user==null || $user==""){
    header('location:../../HTML/login.html');
}else if($tipoUsuario!="user"){
    header('location:../Admin/adminMainPage.php');
}else{
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username = $data['username'];
        $correo = $data['correo'];
        $nombre = $data['nombre'];
        $foto = $data['fotoPerfil'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../IMG/logoheader.png">
    <link rel="stylesheet" href="../../CSS/User/userMainPageStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.tidio.co/0xm4bymhhmxmiwe8qrrlxsjxzvyi2nkl.js" async></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio</title>
</head>
<body>
    <div class="loader">
        <div></div>
    </div>
    <div class="page">
    <header>
            <div class="sidebar">

                <div class="logo_content">
                    <div class="logo">
                        <a href="#" class="foto">
                            <img src="<?php echo $foto; ?>" alt="">
                        </a>
                        <div class="logo_name"><?php echo $username ?></div>
                    </div>
                    <i class='bx bx-menu' id="btn"></i>
                    <i class="bx bx-x" id="btnclose"></i>
                </div>

                <ul class="nav">
                    <li>
                        <a href="userMainPage.php">
                            <i class='bx bxs-home-smile'></i>
                            <span class="link_name"> Inicio </span>
                        </a>
                        <span class="tooltip"> Inicio </span>
                    </li>
                    <li>
                        <a href="contaminacionUserPage.php">
                            <i class='bx bxs-radiation'></i>
                            <span class="link_name"> Contaminación </span>
                        </a>
                            <span class="tooltip"> Contaminación </span>
                    </li>
                    <li>
                        <a href="campanasUserPage.php">
                            <i class='bx bxs-megaphone'></i>
                            <span class="link_name"> Campañas </span>
                        </a>
                        <span class="tooltip"> Campañas </span>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-chip' ></i>
                            <span class="link_name"> DW-23 </span>
                        </a>
                        <span class="tooltip"> DW-23 </span>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxs-message-dots'></i>
                            <span class="link_name"> Chat </span>
                        </a>
                        <span class="tooltip"> Chat </span>
                    </li>
                    <li>
                        <a href="cuentaUser.php">
                            <i class='bx bxs-cog'></i>
                            <span class="link_name"> Configuración </span>
                        </a>
                        <span class="tooltip"> Configuración </span>
                    </li>
                    <li id="close_session">
                        <a href="../../PHP/logout.php">
                            <i class='bx bx-exit'></i>
                            <span class="link_name"> Cerrar Sesión </span>
                        </a>
                        <span class="tooltip"> Cerrar Sesión </span>
                    </li>
                </ul>

            </div>
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
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let btnclose = document.querySelector('#btnclose');
    
        btn.onclick = function(){
            sidebar.classList.toggle('active');
        }
        btnclose.onclick = function(){
            sidebar.classList.toggle('active');
        }
    </script>
</body>
</html>