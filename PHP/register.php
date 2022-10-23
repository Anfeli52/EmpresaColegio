<?php 

include 'conexion.php';


if(isset($_POST['enviar'])){
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['nombreUsuario']);
    $contrasena = md5($_POST['contraseña']);
    $confirmarContrasena = md5($_POST['confirmarContraseña']);
    $telefono = $_POST['telefono'];
    $cumpleaños = $_POST['cumpleaños'];
    $tipoUsuario = $_POST['userType'];
    
    $select = " SELECT * FROM usuarios WHERE correo = '$correo'";
    $result = mysqli_query($conexion, $select);

    if(mysqli_num_rows($result) > 0){
        echo'<script>
            alert("El correo ya está registrado");
            window.history.go(-1);
            </script>';
        exit;
    }else{
        if($contrasena != $confirmarContrasena){
            echo'<script>
            alert("Las contraseñas no coinciden");
            window.history.go(-1);
            </script>';
        exit;
        }else{
            $insert = "INSERT INTO usuarios(nombre, apellido, correo, username, password, confirmPassword, telefono, fechaCumpleaños, tipoUsuario) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contrasena', '$confirmarContrasena', '$telefono', '$cumpleaños', '$tipoUsuario')";
            mysqli_query($conexion, $insert);
            header('location:../HTML/login.html');
        }
    }
}

?>