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
    <title>Cuenta</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../../CSS/User/Setting/cuentaUserStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>

    <div class="body-dark" id="body"></div>

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
                                        <a href="cuentaUser.php" class="contentajustes-especial">
                                            <span class="iconolist"><i class="fa-solid fa-gear"></i></span>
                                            <span class="textlist-especial">Cuenta</span>
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
                </div> <!--FIN LISTA-->

                <div class="layout-der">
                    <div class="layout-main">
                        <div class="container-md"> <!--METER EL CONTENIDO EN EL CONTAINER-MD-->

                            <div class="subhead">
                                <h2 class="subhead-text">
                                    Cuenta
                                </h2>
                            </div> <!--SUBHEAD------------------------------ A PARTIR DE AQUI LLENAR  -->

                            <div class="profile">
                                <div class="columna2">
<!-------------------------------------------------------------------INICIO FORMULARIO CUENTA CAMBIAR NOMBRE DE USUARIO------------------------------------------------------------------->
                                    <form action="" method="post">
                                        <div>
                                            <dl>
                                                <dt>
                                                    <h1 class="username">Nombre de Usuario</h1>
                                                </dt>
                                                <dd>
                                                    <input type="text" class="textuser">
                                                    <div class="note">
                                                        Escoge un nuevo nombre de usuario c:
                                                    </div>
                                                </dd>
                                            </dl>
                                            <p class="guardarcuenta">
                                                <input type="button" class="btncuenta" value=" Guardar Cambios" onclick="SaveName()"> <!--AGRRGAR CONDICIONES DE QUE DEBE DE ESTAR LLENO PARA QUE SALGA LA ALERT Y QUE CUMPLA CON CIERTOS CARACTERES, ENTRE OTRAS COSAS-->
                                            </p>
                                        </div>
                                    </form>
<!-------------------------------------------------------------------FIN FORMULARIO CUENTA CAMBIAR NOMBRE DE USUARIO------------------------------------------------------------------->
                                </div>
                                <div class="columna2" id="foteichon">
                                    <dl>
                                        <dt>
                                            <h1 class="editfoto">Foto de Perfil</h1>
                                        </dt>
                                        <dd class="avatar-upload">
                                            <form action="" method="post">
                                                <div id="ver">
                                                    <img src="../../../IMG/Ajustes/usuario.png" alt="">
                                                </div>

                                                <button class="editbtn"><i class="fa-solid fa-pen"></i> Editar </button>
                                            </form>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div> <!--FIN CONTAINER-MD-->
                    </div> <!--FIN LAYOUT MAIN-->
                    <div class="subhead" id="deletecuenta">
                        <h2 class="subhead-text" id="borrarcuenta">Borrar Cuenta</h2>
                    </div>
                    <p>Una vez borres tu cuenta, no hay vuelta atrás. ¡Ya estas advertido!</p>
                    <p class="eliminarcuenta">
                        <input type="button" value=" Borra mi cuenta " class="btndelete" id="btn_delete_account" onclick="borrarcuenta()">
                    </p>
<!------------------------------------------------------------------------------------------INICIO MENSAJE CONFIRMAR BORRAR CUENTA------------------------------------------------------------------------------------------>
                    <div class="dialog d-flex flex-column box--overlay box" id="mensaje_borrar">
                        <div class="box_header">
                            <button type="button" class="box_btn_close" onclick="closedialog()">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <h2 class="box_title"> ¿Estás seguro que quieres hacer esto? </h2>
                        </div>
                        <div class="box_advert">
                            <i class="fa-solid fa-triangle-exclamation" style="height: 16px;"></i> Esto es extremadamente importante.
                        </div>
                        <div class="box_body">
                            <p> Eliminaremos de inmediato <strong>todo lo relacionado con tu cuenta</strong> de Yaxja. </p>
                            <p> Ya no se le facturará y, después de 90 días, su nombre de usuario estará disponible para cualquier persona en Yaxja. </p>
                            <p> Para obtener más ayuda, contáctanos. </p>
                            <hr></hr>
<!------------------------------------------------------------------------------------------FORMULARIO BORRAR CUENTA------------------------------------------------------------------------------------------>
                            <form action="">
                                <p class="delete_account_text">
                                    <label> Tu nombre de usuario o correo electrónico: </label>
                                    <input type="text" class="form-control">
                                </p>

                                <p class="delete_account_text">
                                    <label> Para verificar, escribe <i>borra mi cuenta</i> abajo: </label>
                                    <input type="text" class="form-control">
                                </p>

                                <p class="delete_account_text" id="last_camp">
                                    <label> Confirma tu contraseña: </label>
                                    <input type="password" class="form-control">
                                </p>

                                <button type="submit" class="btn_delete_account"> Borrar esta cuenta </button> <!--DESHABILITAR BOTON SI LOS CAMPOS NO ESTAN LLENOS O CORRECTOS, Y HABILITAR CUANDO ESTEN CORRECTOS LOS DATOS, ARREGLARLE CSS PA QUE SE VEA MAS RICO-->
                            </form>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------INICIO MENSAJE CONFIRMAR BORRAR CUENTA------------------------------------------------------------------------------------------>
                </div> <!--FIN LAYOUT DERECHO-->
            </div> <!--FIN LAYOUT-->
        </div>
    </main>
    <footer></footer>
    <script src="../../../JS/MenuAjustes/Adverts.js"></script>
</body>
</html>