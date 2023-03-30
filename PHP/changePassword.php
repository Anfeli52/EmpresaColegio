<?php

session_start();
include 'conexion.php';

$correo = $_SESSION['email'];
$password = $_POST['newPassword'];
$confirmPassword = $_POST['confirmNewPassword'];

if($password == $confirmPassword){
    $update = "UPDATE usuario SET password='$password', confirmPassword = '$confirmPassword' WHERE correo = '$correo'";
    mysqli_query($conexion, $update);
    session_destroy();
    echo '<script>
            alert("Contraseña actualizada exitósamente");
        </script>';
    header('location:../HTML/login.php');
}else{
    echo '<script>
            alert("Los passwords no coinciden");
            window.history.go(-1);
        </script>';
}
?>