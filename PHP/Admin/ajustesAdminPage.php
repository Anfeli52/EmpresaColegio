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
}else if($tipoUsuario!="admin"){
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="AjustesCuenta.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="huevos.jpg" alt="#" height="32" width="32">
        </div>
        <div class="box">
            <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
        </div>
        <nav class="options-header">
            <a href="#" class="opciones">Aguapanela</a>
            <a href="#" class="opciones">Limonada</a>
            <a href="#" class="opciones">Arroz</a>
        </nav>
    </header>    
    <main>
        <div class="container">
            <div class="foticousuario">
                <div class="foto">
                    <img src="usuario.png" alt="#" size="48" height="48" width="48" class="avatar">
                    <div class="infoto">
                        <h1 class="h1foto"> <a href="#">DonPancho123</a> </h1>
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
                                        <a href="Ajustes.html" class="contentajustes-especial">
                                            <span class="iconolist"><i class="fa-solid fa-gear"></i></span>
                                            <span class="textlist-especial">Cuenta</span>
                                        </a>
                                    </li>
                                    <li class="ajustes">
                                        <a href="Notificaciones.html" class="contentajustes">
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
                                        <a href="#" class="contentajustes">
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
                                        <a href="#" class="contentajustes">
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
                                        <a href="#" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-rotate"></i></span>
                                            <span class="textlist">Actualizar Método de Pago</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="#" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-clock-rotate-left"></i></span>
                                            <span class="textlist">Historial</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="#" class="contentajustes">
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
                        <div class="container-md">

                            <div class="subhead">
                                <h2 class="subhead-text">
                                    Cuenta
                                </h2>
                            </div>

                            <div class="profile">
                                <div class="columna2">
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
                                                <button type="submit" class="btncuenta"> Guardar Cambios </button>
                                            </p>
                                        </div>
                                    </form>
                                </div>

                                <div class="columna2" id="foteichon">
                                    <dl>
                                        <dt>
                                            <h1 class="editfoto">Foto de Perfil</h1>
                                        </dt>

                                        <dd class="avatar-upload">
                                            <form action="" method="post">
                                                <div id="ver">
                                                    <img src="usuario.png" alt="">
                                                </div>

                                                <button class="editbtn"><i class="fa-solid fa-pen"></i> Editar </button>
                                            </form>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="subhead" id="deletecuenta">
                        <h2 class="subhead-text" id="borrarcuenta">Borrar Cuenta</h2>
                    </div>

                    <p>Una vez borres tu cuenta, no hay vuelta atrás. ¡Ya estas advertido!</p>
                    <p class="guardarcuenta">
                        <input type="button" value=" Borra mi cuenta " class="btndelete">
                    </p>

                </div>
            </div> <!--FIN LAYOUT-->
        </div>

    </main>

    <footer></footer>
    
</body>
</html>