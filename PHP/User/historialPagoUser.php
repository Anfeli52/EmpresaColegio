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
    header('location:../../HTML/login.php');
}else if($tipoUsuario!="user"){
    header('location:../Admin/adminMainPage.php');
}else{
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username=$data['username'];
        $correo=$data['correo'];
        $nombre=$data['nombre'];
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
    <title>Historial de Pago</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../CSS/User/Setting/historialPagoUserStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>

    <header>

        <div class="logo">
            <img src="../../IMG/logoYaxja.jpeg" alt="#" height="32" width="32">
        </div>

        <div class="box">
            <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
        </div>

        <nav class="options-header">
            <a href="userMainPage.php" class="opciones">Inicio</a>
            <a href="contaminacionUserPage.php" class="opciones">Contaminación</a>
            <a href="campanasUserPage.php" class="opciones">Campañas</a>
            <a href="#" class="opciones">DW-23</a>
            <a href="#" class="opciones">Chat</a>
        </nav>

    </header>    

    <main>

        <div class="container">
            <div class="foticousuario">
                <div class="foto">
                    <img src="<?php echo $foto; ?>" alt="#" size="48" height="48" width="48" class="avatar">

                    <div class="infoto">
                        <h1 class="h1foto"> <a href="#"><?php echo $username ?></a> </h1>

                        <div class="descripfoto">
                            <p>Tu cuenta personal :D</p>
                        </div>
                    </div>
                    
                </div>
            </div> <!--DIV FOTICOUSUARIO-->

            <div class="layout">
                <div class="layout-izq"> <!--LISTA-->
                    <div class="lista">
                        <ul class="menuajustes">
                            <li> <!--INICIO PARTE 1-->
                                <ul>
                                    
                                    <li class="ajustes">
                                        <a href="cuentaUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-gear"></i></span>
                                            <span class="textlist">Cuenta</span>
                                        </a>
                                    </li>
                                    <li class="ajustes">
                                        <a href="notificacionesUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-bell"></i></span>
                                            <span class="textlist">Notificaciones</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 1-->
                            
                            <li class="separador"></li>

                            <li> <!--INICIO PARTE 2-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Acceso</h3>
                                    </li>
                                    
                                    <li class="ajustes">
                                        <a href="emailUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-envelope"></i></span>
                                            <span class="textlist">Email</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 2-->

                            <li class="separador"></li>

                            <li> <!--INICIO PARTE 3-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Seguridad</h3>
                                    </li>
                                    
                                    <li class="ajustes">
                                        <a href="contrasenaUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-shield-halved"></i></span>
                                            <span class="textlist">Contraseña y Autenticación</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 3-->

                            <li class="separador"></li>

                            <li> <!--INICIO PARTE 4-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Método de Pago</h3>
                                    </li>
                                    
                                    <li class="ajustes">
                                        <a href="actualizarPagoUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-rotate"></i></span>
                                            <span class="textlist">Actualizar Método de Pago</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="historialPagoUser.php" class="contentajustes-especial">
                                            <span class="iconolist"><i class="fa-solid fa-clock-rotate-left"></i></span>
                                            <span class="textlist-especial">Historial</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="limiteGastoUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-sharp fa-solid fa-dollar-sign"></i></span>
                                            <span class="textlist">Administrar Límite de Gasto</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 4-->
                        </ul>
                    </div>
                </div> <!--FIN LISTA OSEA LAYOUT IZQUIERDO-->

                <div class="layout-der">
                    <div class="layout-main">
                        <div class="container-md"> <!--METER EL CONTENIDO EN EL CONTAINER-MD-->

                            <div class="subhead">
                                <h2 class="subhead-text">
                                    Historial de Pago
                                </h2>
                            </div> <!--SUBHEAD------------------------------ A PARTIR DE AQUI LLENAR  -->

                            <div class="payment_history">
                                <i class="fa-regular fa-credit-card" style="font-size: 36px;"></i>
                                <h2 class="payment_history_text"> No has realizado ningún pago. </h2> <!--AQUI COLOCAR QUE CUANDO HAYA HECHO UN PAGO, QUITE TODO EL AVISO Y COLOQUE EL HISTORIAL :D-->
                            </div>

                            <p class="history_note"> Cantidades mostrados en dólares (USD).</p>

                        </div> <!--CONTAINER DEL LAYOUT DERECHO-->
                    </div> <!--LAYOUT MAIN-->
                </div> <!--LAYOUT DERECHO-->
            </div> <!--FIN LAYOUT-->
        </div>

    </main>

    <footer></footer>
    
<script src="../../JS/MenuAjustes/Adverts.js"></script>

</body>
</html>