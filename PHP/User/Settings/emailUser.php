<?php

session_start();
include '../../conexion.php';

$user = $_SESSION['correo'];
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
        $username=$data['username'];
        $correo=$data['correo'];
        $nombre=$data['nombre'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correos Electrónicos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../../CSS/User/Setting/emailUserStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>

    <header>

        <div class="logo">
            <img src="../../../IMG/logoYaxja.jpeg" alt="#" height="32" width="32">
        </div>

        <div class="box">
            <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
        </div>

        <nav class="options-header">
            <a href="../userMainPage.php" class="opciones">Inicio</a>
            <a href="../contaminacionUserPage.php" class="opciones">Contaminación</a>
            <a href="../campanasUserPage.php" class="opciones">Campañas</a>
            <a href="#" class="opciones">Yaxjaneitor3000</a>
        </nav>

    </header>    

    <main>

        <div class="container">
            <div class="foticousuario">
                <div class="foto">
                    <img src="../../../IMG/Ajustes/usuario.png" alt="#" size="48" height="48" width="48" class="avatar">

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
                                        <a href="emailUser.php" class="contentajustes-especial">
                                            <span class="iconolist"><i class="fa-solid fa-envelope"></i></span>
                                            <span class="textlist-especial">Email</span>
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
                                        <a href="historialPagoUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-clock-rotate-left"></i></span>
                                            <span class="textlist">Historial</span>
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
                                    Correos Electrónicos
                                </h2>
                            </div> <!--SUBHEAD------------------------------ A PARTIR DE AQUI LLENAR  -->

                            <ul id="ajustesmail">
                                <li class="box-row">

                                    <div class="itemcorreos">
                                        <div class="infocorreo">
                                            <h4 class="email"> <?php echo $correo ?> </h4> <!--OPCIONES DE CORREO SEGUN BASE DE DATOS-->
                                            <span class="a-"> - </span>
                                            <span>
                                                <span class="primary"> Primary </span>
                                                <span class="a-" ><i class="fa-regular fa-circle-question" id="question"></i></span> 
                                            </span>
                                            
                                            <div class="triangle_hover" id="triangle"><i class="fa-solid fa-caret-up" style="font-size: 30px;"></i></div> 

                                            <div class="mensaje_hover" id="mensaje">
                                                <p>Este correo electrónico se usará para notificaciones relacionadas con la cuenta y también se puede usar para restablecer la contraseña.</p>
                                            </div>
                                        </div>

                                        <div class="basura">
                                            <form action="">
                                                <input type="button" class="eliminarcorreo">
                                                
                                                <i class="fa-solid fa-trash" id="trash"  onclick="DeleteEmail()"></i>
                                                
                                                <div class="triangle_hover" id="triangledelete"><i class="fa-solid fa-caret-down" style="font-size: 20px;"></i></div> 

                                                <div class="mensaje_hover" id="delete">
                                                    <p>Se requiere al menos un correo electrónico.</p>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div> <!--ACA ESTA LA PARTE DE ARRIBITA (EMAIL - PRIMARY - BTN INFO - BTN BASURA)-->

                                    <ul class="observaciones">
                                        <li>
                                            <span>
                                                <span> Recibe Notificaciones </span>
                                                <span class="a-"> <i class="fa-regular fa-circle-question" id="question2"></i> </span>
                                            </span>

                                            <div class="triangle_hover" id="triangle2"><i class="fa-solid fa-caret-up" style="font-size: 30px;"></i></div> 

                                            <div class="mensaje_hover" id="mensaje2">
                                                <p>Esta dirección de correo electrónico es la utilizada por defecto para las notificaciones de Yaxja.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <form action="" id="new-email-user">
                                <dl class="addemail">
                                    <dt>
                                        <label for="email" id="email-label"> Añadir Correo Electrónico </label>
                                    </dt>

                                    <dd>
                                        <input type="email" id="email" class="textemail" required="required" placeholder="Correo Electrónico">
                                        <button type="submit" class="btn" onclick="AddEmail()"> Añadir </button> <!--ACOMODAR QUE CUANDO EL CAMPO ESTA VACIO NO ENVIE LA ALERTA-->
                                    </dd>
                                </dl>
                            </form>

                        </div> <!--CONTAINER DEL LAYOUT DERECHO-->
                    </div> <!--LAYOUT MAIN-->
                </div> <!--LAYOUT DERECHO-->
            </div> <!--FIN LAYOUT-->
        </div>

    </main>

    <footer></footer>
    
<script src="../../../JS/MenuAjustes/Adverts.js"></script>

</body>
</html>