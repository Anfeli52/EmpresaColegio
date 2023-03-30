<?php

session_start();
include '../conexion.php';

$correo = $_SESSION['email'];
$sql = "SELECT * FROM usuario WHERE correo = '" . $correo . "';";
$resultado = $conexion->query($sql);

while ($data = $resultado->fetch_assoc()) {
    $username = $data['username'];
    $password = $data['password'];
}

$usuarioCorreo = $_POST['usuarioCorreo'];
$borrarCuenta = $_POST['borrarCuenta'];
$passCuenta = $_POST['passCuenta'];

if($usuarioCorreo==$correo || $usuarioCorreo==$username){
    if($borrarCuenta=="borra mi cuenta"){
        if($passCuenta==$password){
            $delete = "DELETE FROM usuario WHERE correo = '$correo'";
            mysqli_query($conexion, $delete);
            session_destroy();
            session_unset();
            header('location:../../HTML/login.php');
        }else{
            header('location:cuentaAdmin.php');
        }
    }else{
        header('location:cuentaAdmin.php');
    }
}else{
    header('location:cuentaAdmin.php');
}
?>