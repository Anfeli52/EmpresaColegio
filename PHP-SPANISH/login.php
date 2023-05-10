<?php 

include 'conexion.php';

if(isset($_POST['envio'])){
    $correo = $_POST['correo'];
    $contrasena = $_POST['contraseña'];
    session_start();
    $_SESSION['email'] = $correo;
    $_SESSION['pass'] = $contrasena;
    $select = " SELECT * FROM usuario WHERE correo = '$correo' && password = '$contrasena'";
    $result = mysqli_query($conexion, $select);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['tipoUsuario'] == 'admin'){
            #$_SESSION['admin_name'] = $row['usuario'];
            header('location:Admin/adminMainPage.php');
        }elseif($row['tipoUsuario'] == 'user'){
            #$_SESSION['user_name'] = $row['usuario'];
            header('location:User/userMainPage.php');
        }
    }else{
        header('location: ../HTML/login.php?error="failedLog"');
    }
}
?>