<?php

session_start();
include '../conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '" . $user . "';";
$result = $conexion->query($select);
while ($datos = $result->fetch_assoc()) {
    $tipoUsuario = $datos['tipoUsuario'];
}

if ($user == null || $user == "") {
    header('location:../../HTML/login.php');
} else if ($tipoUsuario != "user") {
    header('location:../Admin/adminMainPage.php');
} else {
    $sql = "SELECT * FROM usuario WHERE correo = '" . $user . "';";
    $resultado = $conexion->query($sql);

    while ($data = $resultado->fetch_assoc()) {
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Principal</title>
</head>

<body>

    <div class="loader">
        <div class="ping"></div>
    </div>

    <div class="page">

        <header>
            <div class="yaxja-idioma">
                <a href="#" class="logo"> Yaxja </a>
                <div class="change-idioma">
                    <span class="en">Inglés</span>
                    <input type="checkbox" class="check-idioma" checked>
                    <span class="es">Español</span>
                </div>
            </div>

            <ul>
                <li> <a href="#section" class="active"> Principal </a> </li>
                <li> <a href="contaminacionUserPage.php" class="see"> Contaminación </a> </li>
                <li> <a href="campanasUserPage.php" class="see"> Campañas </a> </li>
                <li> <a href="ProductoDw23.php"> DW-23 </a> </li>
                <li> <a href="cuentaUser.php"> Configuración </a> </li>

                <li><img src="<?php echo $foto; ?>" alt="#" class="avatar"></li>
                <li id="log-out">
                    <a href="../logout.php"> <i class="bx bx-exit"></i> </a>
                    <span> Cerrar Sesión </span>
                </li>
            </ul>
        </header>

        <section id="section">
            <img src="../../IMG/Nubes.svg" id="nubes">
            <img src="../../IMG/Sol.svg" id="sol">
            <img src="../../IMG/Arboles-y-Suelo.svg" id="arboles">
            <img src="../../IMG/MontañasOscuras.svg" id="mountaindark">
            <img src="../../IMG/MontañasClaras.svg" id="mountainlight">

            <h2 id="text"> BIENVENIDO </h2>
            <a href="#sec" id="btn"> Explorar </a>

            <img src="../../IMG/Lago.svg" id="lago">
        </section>

        <div class="sec" id="sec">
            <div data-aos="fade-down">
                <h2 class="titulo-section"> Sobre Nosotros </h2>
            </div>
            <div class="aboutUs">

                <p class="est" data-aos="fade-up"> — EST 2023 — </p>

                <p class="text-about" data-aos="fade-up">
                Somos una empresa que hace de las necesidades sociales y empresariales, soluciones tecnológicas que contribuyan con la evolución de la humanidad a través del desarrollo tecnológico aplicado a las necesidades  especificas de cada empresa o persona ofreciéndoles soluciones integrales, con la finalidad de crear o desarrollar software de fácil uso, que tenga sobresalientes niveles de rentabilidad, calidad, presencia e influencia en el mercado laboral. <br> <br>

                Yaxja será una empresa que contribuirá con el medio ambiente y el desarrollo de la tecnología mediante los programas desarrollados, logrando así dar un apoyo mediante nuestro software a las organizaciones que tratan de eliminar la problemática de la contaminación, logrando a un futuro tener un ambiente mas sano, limpio y habitable. <br> <br>

                    <span class="quote1" data-aos="fade-up"> Cuídate y recuerda... ¡DESPLAZATE LENTO, AMIGO! </span>
                </p>

            </div> <!--FIN DIV ABOUTUS-->
        </div> <!--FIN DIV SEC-->

        <div class="third" id="third">
            <div>
                <h2 class="titulo-section" data-aos="fade-left"> Nuestro equipo </h2>
            </div>
            <div class="ourTeam">

                <p class="meet" data-aos="fade-right"> Conocenos </p>

                <div class="cardsTeam">

                    <div class="card" id="egga" data-aos="fade-right"> <!--DIV CARD-->
                        <div class="blob"></div> <!--DIV BLOB-->
                        <span class="img"> <img src="../../IMG/Medina.jpeg" alt=""> </span>
                        <h2>Andrés Medina</h2>
                        <span class="puesto"> Desarrollador web </span>

                        <p> <!--P-->
                            <a href="#"> <i class='bx bxl-instagram'></i> </a>
                            <a href="#"> <i class='bx bxl-facebook-circle'></i> </a>
                            <a href="#"> <i class='bx bxl-twitter'></i> </a>
                            <a href="#"> <i class='bx bx-envelope'></i> </a>
                        </p> <!--FIN P-->
                    </div> <!--FIN DIV CARD HUEVO-->

                    <div class="card" id="pock" data-aos="fade-right"> <!--DIV CARD-->
                        <div class="blob"></div> <!--DIV BLOB-->
                        <span class="img"> <img src="../../IMG/Luis.jpeg" alt=""> </span>
                        <h2>Luis Calderón</h2>
                        <span class="puesto"> Diseñador web </span>

                        <p> <!--P-->
                            <a href="#"> <i class='bx bxl-instagram'></i> </a>
                            <a href="#"> <i class='bx bxl-facebook-circle'></i> </a>
                            <a href="#"> <i class='bx bxl-twitter'></i> </a>
                            <a href="#"> <i class='bx bx-envelope'></i> </a>
                        </p> <!--FIN P-->
                    </div> <!--FIN DIV CARD lUIS-->

                    <div class="card" id="potes" data-aos="fade-left"> <!--DIV CARD-->
                        <div class="blob"></div> <!--DIV BLOB-->
                        <span class="img"> <img src="../../IMG/Soto.jpeg" alt=""> </span>
                        <h2>Juan Soto</h2>
                        <span class="puesto"> Gerente </span>

                        <p> <!--P-->
                            <a href="#"> <i class='bx bxl-instagram'></i> </a>
                            <a href="#"> <i class='bx bxl-facebook-circle'></i> </a>
                            <a href="#"> <i class='bx bxl-twitter'></i> </a>
                            <a href="#"> <i class='bx bx-envelope'></i> </a>
                        </p> <!--FIN P-->
                    </div> <!--FIN DIV CARD POTES-->

                    <div class="card" data-aos="fade-left"> <!--DIV CARD-->
                        <div class="blob"></div> <!--DIV BLOB-->
                        <span class="img"> <img src="../../IMG/Lucio.jpeg" alt=""> </span>
                        <h2>Juan Idrobo</h2>
                        <span class="puesto"> Marketing </span>

                        <p> <!--P-->
                            <a href="#"> <i class='bx bxl-instagram'></i> </a>
                            <a href="#"> <i class='bx bxl-facebook-circle'></i> </a>
                            <a href="#"> <i class='bx bxl-twitter'></i> </a>
                            <a href="#"> <i class='bx bx-envelope'></i> </a>
                        </p> <!--FIN P-->
                    </div> <!--FIN DIV CARD WESTCOL-->

                </div> <!--FIN DIV CARDSTEAM-->

            </div> <!--FIN DIV OURTEAN-->
        </div> <!--FIN DIV THIRD-->

        <div class="four" id="four">
            <div class="agu">

                <div class="info-dw">
                    <h1 class="intro-dw"> Presentando el nuevo </h1>
                    <h1 class="dw-23"> DW-23 </h1>

                    <p class="text-dw">
                        Te presentamos nuestro innovador producto, el "DW-23". Si estás preocupado por la calidad del agua que te rodea y deseas contribuir a su conservación, este dispositivo es la elección perfecta.
                    </p>

                    <a href="ProductoDw23.php" class="btn-more"> Saber más </a>
                </div>
                <div class="img-dw">
                    <img src="../../IMG/FotosCuerpos/Agua.jpg" alt="">
                </div>

            </div>
        </div>

        <footer id="contact">
            <div class="footer-content">
                <div class="footer-tab contact-us">
                    <h3> CONTÁCTENOS </h3>
                    <p> <a href="#"> yaxja@gmail.com </a> </p>
                    <h3> OFICINA </h3>
                    <p> +626 460 0461 </p>
                </div>

                <div class="footer-tab follow-us">
                    <h3> SÍGUENOS </h3>
                    <div class="footer-share">
                        <a href="#"> <i class='bx bxl-twitter'></i> </a>
                        <a href="#"> <i class='bx bxl-facebook'></i> </a>
                        <a href="#"> <i class='bx bxl-instagram'></i> </a>
                        <a href="#"> <i class='bx bxl-youtube'></i> </a>
                    </div>
                </div>

                <div class="footer-tab location">
                    <h3> UBICACIÓN </h3>
                    <p>
                        Comfandi Calipso
                        <br>
                        Cali, VAC 760022
                    </p>
                </div>

                <div id="legal">
                    © YAXJA, CO - Comprometidos con el medio ambiente desde los pañales.
                </div>
            </div>
        </footer>

    </div>

    <script>
        let nubes = document.getElementById('nubes');
        let sol = document.getElementById('sol');
        let mountainlight = document.getElementById('mountainlight');
        let mountaindark = document.getElementById('mountaindark');
        let arboles = document.getElementById('arboles');
        let lago = document.getElementById('lago');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');

        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            sol.style.top = value * 1.05 + 'px';
            mountaindark.style.top = value * 0.5 + 'px';
            mountainlight.style.top = value * 0.5 + 'px';
            lago.style.top = value * 0.5 + 'px';
            text.style.marginBottom = value * 2 + 'px'
            btn.style.marginTop = value * 1.5 + 'px';
        });
    </script>

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let btnclose = document.querySelector('#btnclose');
        let idioma = document.querySelector('.fa-earth-americas');
        let srcBtn = document.querySelector('.bx-search-alt-2');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        }
        btnclose.onclick = function() {
            sidebar.classList.toggle('active');
        }
        idioma.onclick = function() {
            sidebar.classList.toggle('active');
        }
        srcBtn.onclick = function() {
            sidebar.classList.toggle('active');
        }
    </script>

    <script>
        var check = document.querySelector('.check-idioma');
        check.addEventListener('click', idioma2);

        function idioma2(){
            let id = check.checked;
            if(id == true){
                location.href = "../../PHP-SPANISH/User/UserMainPage.php";
            } else{
                location.href = "../../PHP/User/UserMainPage.php"
            }
        }
    </script>

    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
            $(".page").fadeIn(1000);
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>