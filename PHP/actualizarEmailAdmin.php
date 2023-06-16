<?php

session_start();
include 'conexion.php';

if(isset($_POST['updateEmailAccount'])){
    $correo = $_SESSION['email'];
    $emailUser = $_POST['updateEmail'];

    if($emailUser!="" || $emailUser!="'='" || $emailUser!=NULL){
        $select = "SELECT * FROM usuario WHERE correo = '$emailUser'";
        $query = mysqli_query($conexion, $select);
        if(mysqli_num_rows($query)>0){
            header('location: Admin/emailAdmin.php?emailAlreadyExist=1');
        }else{
            $update = "UPDATE usuario SET correo = '$emailUser' WHERE correo = '$correo'";
            $query = mysqli_query($conexion, $update);
            $_SESSION['email'] = $emailUser;
            header('location: Admin/emailAdmin.php');
        }
    }
}else{
    header('location: Admin/emailAdmin.php');
}

?>