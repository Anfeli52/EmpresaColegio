<?php

session_start();
include '../conexion.php';

$correo = $_SESSION['email'];
$sql = "SELECT * FROM usuario WHERE correo = '$correo'";
$resultado = $conexion->query($sql);
while ($data = $resultado->fetch_assoc()) {
    $nombre = $data['username'];
}

$username = $_POST['UserName'];
$foto = $_FILES['fotico'];

$nombre_img = $_FILES['fotico']['name'];
$temporal = $_FILES['fotico']['tmp_name'];
echo $temporal;
$carpeta = '../../IMG/FotosPerfil';
$ruta = $carpeta . '/' . $nombre_img;
echo $ruta;
move_uploaded_file($temporal, $carpeta . '/' . $nombre_img);

$select = "SELECT * FROM usuario WHERE username = '$username'";
$result = mysqli_query($conexion, $select);

if(mysqli_num_rows($result)>0){
    if($ruta!="../../IMG/FotosPerfil/" && $username!="" && $username!=null){
        $update = "UPDATE usuario SET fotoPerfil = '$ruta' WHERE correo = '$correo'";
        mysqli_query($conexion, $update);
    }
}else{
    if($ruta!="../../IMG/FotosPerfil/" && $username!=""&&$username!=null){
        $update = "UPDATE usuario SET username = '$username', fotoPerfil = '$ruta' WHERE correo = '$correo'";
    }elseif($ruta=="../../IMG/FotosPerfil/" && $username!=""&&$username!=null){
        $update = "UPDATE usuario SET username = '$username' WHERE correo = '$correo'";
    }elseif($ruta!="../../IMG/FotosPerfil/" && $username==""&&$username==null){
        $update = "UPDATE usuario SET fotoPerfil = '$ruta' WHERE correo = '$correo'";
    }else{
        header('location:cuentaUser.php');
    }
    mysqli_query($conexion, $update);
}
header('location:cuentaAdmin.php');
/*if($ruta!="../../IMG/FotosPerfil/"){
    if(mysqli_num_rows($result)>0){
        $update = "UPDATE usuario SET fotoPerfil = '$ruta' WHERE correo = '$correo'";
        mysqli_query($conexion, $update);
    }else{
        if($username!=""||$username!=null){
            $update = "UPDATE usuario SET username = '$username' WHERE correo = '$correo'";
        }
    }
    mysqli_query($conexion, $update);
}else{
    if($username!=""||$username!=null){
        $update = "UPDATE usuario SET username = '$username' WHERE correo = '$correo'";
        mysqli_query($conexion, $update);
    }
}*/
?>