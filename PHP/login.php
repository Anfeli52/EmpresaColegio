<?php 

include 'conexion.php';

if(isset($_POST['enviar'])){
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contrasena = md5($_POST['contraseña']);
    $select = " SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$contrasena'";
    $result = mysqli_query($conexion, $select);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['tipoUsuario'] == 'admin'){
            #$_SESSION['admin_name'] = $row['usuario'];
            include('../HTML/Admin/adminMainPage.html');
            header('location:../HTML/adminMainPage.html');
        }elseif($row['tipoUsuario'] == 'user'){
            #$_SESSION['user_name'] = $row['usuario'];
            include('../HTML/User/userMainPage.html');
            header('location:../HTML/userMainPage.html');
        }
    }else{
        echo'<script>
            alert("Email o contraseña incorrectos");
            window.history.go(-1);
            </script>';
    }
}
?>