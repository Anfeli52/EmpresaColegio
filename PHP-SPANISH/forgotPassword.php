<?php

include 'conexion.php';

$correo = $_POST['correo'];
$select = "SELECT * FROM usuario WHERE correo = '$correo'";
$result = mysqli_query($conexion, $select);
if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['email'] = $correo;
    header('location:../HTML/changePassword.html');
}else{
    echo '<script>
            alert("Este correo no está registrado");
            window.history.go(-1)
        </script>';
}

?>