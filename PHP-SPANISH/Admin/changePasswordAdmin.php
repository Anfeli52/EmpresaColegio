<?php

session_start();
include '../conexion.php';

if(isset($_POST['updateNewPassword'])){
    $correo = $_SESSION['email'];
    $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
    $resultado = $conexion->query($sql);

    $fetch = mysqli_fetch_assoc($resultado);
    $password = $fetch['password'];

    $contraseñaAntigua = $_POST['oldPassword'];
    $nuevaContraseña = $_POST['newPassword'];
    $confNuevaContraseña = $_POST['confirmNewPassword'];

    if($contraseñaAntigua==$password && $nuevaContraseña==$confNuevaContraseña){
        $update = "UPDATE usuario SET password = '$nuevaContraseña', confirmPassword = '$confNuevaContraseña' WHERE correo = '$correo'";
        mysqli_query($conexion, $update);
        header('location:contrasenaAdmin.php');
    }else{
        header('location: contrasenaAdmin.php?passwordError=true');
    }
}else{
    header('location: contrasenaAdmin.php');
}

?>