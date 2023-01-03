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
    <link rel="stylesheet" href="../../CSS/Admin/ajustesAdminPageStyle.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Ajustes</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../../IMG/logoYaxja.jpeg" alt="#">
        </div>
        <div class="box">
            <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
        </div>
        <nav class="options-header">
            <a href="adminMainPage.php" class="opciones">Inicio</a>
            <a href="contaminacionAdminPage.php" class="opciones">Contaminación</a>
            <a href="campanasAdminPage.php" class="opciones">Campañas</a>
            <a href="recomendationAdminPage.php" class="opciones">Recomendaciones</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="foticousuario">
                <div class="foto">
                    <img src="../../IMG/usuario.png" alt="#" size="48" height="48" width="48" class="avatar">

                    <div class="infoto">
                        <h1 class="h1foto"> <a href="#">DonPancho123</a> </h1>

                        <div class="descripfoto">
                            <p>Tu cuenta personal :D</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--DIV FOTICOUSUARIO-->
            <div class="layout">
                <div class="layout-izq">
                    <div class="lista">
                        <ul class="menuajustes">
                            <li>
                                <!--INICIO PARTE 1-->
                                <ul>
                                    <li class="ajustes">
                                        <a href="#" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-user"></i></span>
                                            <span class="textlist">Perfil Público</span>
                                        </a>
                                    </li>
                                    <li class="ajustes">
                                        <a href="#" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-gear"></i></span>
                                            <span class="textlist">Cuenta</span>
                                        </a>
                                    </li>
                                    <li class="ajustes">
                                        <a href="#" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-bell"></i></span>
                                            <span class="textlist">Notificaciones</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!--FIN PARTE 1-->
                            <li class="separador"></li>
                            <li>
                                <!--INICIO PARTE 2-->
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
                            </li>
                            <!--FIN PARTE 2-->
                            <li class="separador"></li>
                            <li>
                                <!--INICIO PARTE 3-->
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
                            </li>
                            <!--FIN PARTE 3-->
                            <li class="separador"></li>
                            <li>
                                <!--INICIO PARTE 4-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Método de Pago</h3>
                                    </li>
                                    <li class="ajustes">
                                        <a href="#" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-credit-card"></i></span>
                                            <span class="textlist">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--FIN PARTE 4-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer></footer>

</body>

</html>