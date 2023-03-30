<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginStyle.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="../JS/funciones.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Login</title>
</head>
<body>

    <div class="olas">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(240, 235, 204, 0.9)" />
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(240, 235, 204, 0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(240, 235, 204, 0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(240, 235, 204, 0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(240, 235, 204, 0.1)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#F0EBCC" />
        </g>
        </svg>
    </div>

    <div class="contenedor">
        
        <div class="login-container">
            <img src="../IMG/logoheader.png" alt="">
            <?php 
            
            if(isset($_GET['error'])){
                echo '
                <div class="contenedorError">
                    <span>¡¡Correo o Contraseña Incorrectos!!</span>
                </div>
                ';
            }

            ?>
            <form action="../PHP/login.php" method="post">
                <h1> Log in </h1>
                <div class="login-text">
                    <label for="correo"> Email </label>
                    <input type="email" placeholder="Email" id="idEmail" name="correo" value="" class="input-login">

                    <label for="password"> Password </label>
                    <input type="password" placeholder="Password" id="idPassword" name="contraseña" value="" class="input-login">
                </div>

                <div class="pass-link">
                    <a href="forgotPassword.html"> Did you forget your password? </a>
                </div>

                <div class="btn-enviar">
                    <input type="submit" name="envio" class="enviar-login" value="Log In">
                </div>
            </form>
            
            <p class="register"> Do not you have an account yet? <a href="Inicio/register.html"> Sign up </a> </p>
        
        </div>

        <!--<form action="../PHP/login.php" method="post">
                <label for="correo">Email</label>
                <input type="email" name="correo" id="idEmail" required placeholder="Email" value="">
                <label for="password">Password</label>
                <input type="password" name="contraseña" id="idPassword" required placeholder="Password" value="">
                <p><a href="forgotPassword.html">¿Olvidaste tu contraseña?</a></p>
                <label for="enviar" class="btnEnviar"><input type="submit" name="envio" class="enviar" value="Iniciar Sesión"></label>            
            </form>-->

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>