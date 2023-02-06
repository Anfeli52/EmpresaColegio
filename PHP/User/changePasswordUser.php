<?php

session_start();
include '../conexion.php';

$correo = $_SESSION['correo'];
$sql = "SELECT * FROM usuario WHERE correo = '" . $correo . "';";
$resultado = $conexion->query($sql);

while ($data = $resultado->fetch_assoc()) {
    $username = $data['username'];
    $password = $data['password'];
}

$contraseñaAntigua = $_POST['oldPassword'];
$nuevaContraseña = $_POST['newPassword'];
$confNuevaContraseña = $_POST['confirmNewPassword'];

if($contraseñaAntigua==$password){
    if($nuevaContraseña==$confNuevaContraseña){
        $update = "UPDATE usuario SET password = '$nuevaContraseña', confirmPassword = '$confNuevaContraseña' WHERE correo = '$correo'";
        mysqli_query($conexion, $update);
        header('location:cuentaUser.php');
    }else{
        echo '<script>
                alert("Las contraseñas no coinciden");
                window.history.go(-1);
            </script>';
    }
}else{
    echo '<script>
            alert("Contraseña incorrecta");
            window.history.go(-1);
        </script>';
}
?>