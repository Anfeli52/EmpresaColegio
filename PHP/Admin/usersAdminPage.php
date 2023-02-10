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
}else if($tipoUsuario!="admin"){
    header('location:../User/userMainPage.php');
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
    <link rel="stylesheet" href="../../CSS/Admin/adminMainPageStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                            <img src="<?php echo $foto; ?>" alt="">
                            <span class="navItemAdmin">
                                <?php echo $username ?>
                            </span>
                        </a>
                    </li>
                    <li><a href="#">
                        <i class="fas fa-home"></i>
                        <span class="navItemAdmin">Inicio</span>
                    </a></li>
                    <li><a href="contaminacionAdminPage.php">
                        <i class="fas fa-radiation"></i>
                        <span class="navItemAdmin">Contaminación</span>
                    </a></li>
                    <li><a href="campanasAdminPage.php">
                        <i class="fas fa-tags"></i>
                        <span class="navItemAdmin">Campañas</span>
                    </a></li>
                    <li><a href="#">
                        <i class="fas fa-tasks"></i>
                        <span class="navItemAdmin">Yaxjaneitor3000</span>
                    </a></li>
                    <li><a href="#">
                        <i class="fas fa-users"></i>
                        <span class="navItemAdmin">Usuarios</span>
                    </a></li>
                    <li><a href="#">
                        <i class="fas fa-download"></i>
                        <span class="navItemAdmin">Actualizar Campañas</span>
                    </a></li>
                    <li><a href="cuentaAdmin.php">
                        <i class="fas fa-cog"></i>
                        <span class="navItemAdmin">Configuración</span>
                    </a></li>
                    <!-- <li><a href="contactUsAdmin.html">
                        <i class="fas fa-phone"></i>
                        <span class="navItemAdmin">Contacto</span>
                    </a></li> -->
                    <!--<li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="navItemAdmin">Configuración</span>
                    </a></li> -->
                    <li><a href="../../PHP/logout.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="navItemAdmin">Cerrar Sesión</span>
                    </a></li>
                </ul>
            </nav>
        </header>
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