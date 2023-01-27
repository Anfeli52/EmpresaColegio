<?php 

include 'conexion.php';

if(isset($_POST['enviar'])){
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['nombreUsuario']);
    $contrasena = $_POST['contraseña'];
    $confirmarContrasena = $_POST['confirmarContraseña'];
    $telefono = $_POST['telefono'];
    $cumpleaños = $_POST['cumpleaños'];
    $foto = "../../IMG/FotosPerfil/Anonimo.png";
    $select = " SELECT * FROM usuario WHERE correo = '$correo' || username = '$usuario'";
    $result = mysqli_query($conexion, $select);

    if(mysqli_num_rows($result) > 0){
        echo'<script>
                alert("El correo o usuario ya está registrado");
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
            $insert = "INSERT INTO usuario(nombre, apellido, correo, username, password, confirmPassword, telefono, fechaCumpleaños, tipoUsuario, fotoPerfil) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contrasena', '$confirmarContrasena', '$telefono', '$cumpleaños', 'user', '$foto')";
            mysqli_query($conexion, $insert);
            header('location:../HTML/login.html?success=Account Created Successfully');
        }
    }
}

?>