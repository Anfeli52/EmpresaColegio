<?php 

include 'conexion.php';

if(isset($_POST['envio'])){
    $correo = $_POST['correo'];
    $contrasena = $_POST['contraseña'];
    session_start();
    $select = " SELECT * FROM usuarios WHERE correo = '$correo' && password = '$contrasena'";
    $result = mysqli_query($conexion, $select);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['tipoUsuario'] == 'admin'){
            #$_SESSION['admin_name'] = $row['usuario'];
            echo '<script>
                    window.location.replace("../HTML/Admin/adminMainPage.html"); 
                </script>';
        
            }elseif($row['tipoUsuario'] == 'user'){
            #$_SESSION['user_name'] = $row['usuario'];
            echo '<script>
                    window.location.replace("../HTML/User/userMainPage.html");
                </script>';
        }
    }else{
        echo'<script>
            alert("Email o contraseña incorrectos");
            window.history.go(-1);
            </script>';
    }
}
?>