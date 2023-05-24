<?php

include '../conexion.php';
session_start();

if(isset($_POST['btnActualizarUsuarios'])){
    $correoCampo = $_GET['idUserEmail'];
    $correo = $_POST['usuarioCorreo'];
    $nombre = $_POST['usuarioNombre'];
    $apellido = $_POST['usuarioApellido'];
    $username = $_POST['usuarioUsername'];
    $telefono = $_POST['usuarioTelefono'];
    $tipoUsuario = $_POST['usuarioTipoUsuario'];

    $selectCorreo = "SELECT * FROM usuario WHERE correo = '$correo'";
    $selectNombre = "SELECT * FROM usuario WHERE username = '$username'";

    $queryCorreo = $conexion->query($selectCorreo);
    $queryNombre = $conexion->query($selectNombre);

    if($correo!="" && $nombre!="" && $apellido!="" && $username!="" && $telefono!="" && $tipoUsuario!=""){
        if(mysqli_num_rows($queryCorreo)===0){
            $updateCorreo = "UPDATE usuario SET correo = '$correo', nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', tipoUsuario = '$tipoUsuario' WHERE correo = '$correoCampo'";
            $return = 1;
            mysqli_query($conexion, $updateCorreo);
        }else{
            $updateCorreo = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', tipoUsuario = '$tipoUsuario' WHERE correo = '$correoCampo'";
            $return = 0;
            mysqli_query($conexion, $updateCorreo);
        }

        if($return===1){
            $correoActualizado = $correo;
        }else{
            $correoActualizado = $correoCampo;
        }

        if(mysqli_num_rows($queryNombre)===0){
            $updateNombre = "UPDATE usuario SET username = '$username', nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', tipoUsuario = '$tipoUsuario' WHERE correo = '$correoActualizado'";
            mysqli_query($conexion, $updateNombre);
        }else{
            $updateNombre = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', tipoUsuario = '$tipoUsuario' WHERE correo = '$correoActualizado'";
            mysqli_query($conexion, $updateNombre);
        }
    }

    header('location: usersAdminPage.php');
}else{
    header('location: usersAdminPage.php');
}
?>