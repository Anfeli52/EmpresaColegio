<?php

session_start();
include '../conexion.php';

$user = $_SESSION['correo'];

if($user==null || $user==""){
    header('location:../../HTML/login.html');
}else{
    $sql = "SELECT * FROM usuarios WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username=$data['username'];
    }
}

?>