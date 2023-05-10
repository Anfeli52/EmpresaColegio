<?php

session_start();
include 'conexion.php';

$correo = $_SESSION['email'];

$emailUser = $_POST['updateEmail'];

$update = "UPDATE usuario SET correo = '$emailUser' WHERE correo = '$correo'";
$query = mysqli_query($conexion, $update);
$_SESSION['email'] = $emailUser;
header('location: User/emailUser.php');

?>