<?php

session_start();
include 'conexion.php';
session_start();
$correo = $_SESSION['email'];

$numberCard = $_POST['cardNumberEdit'];
$nameCard = $_POST['cardHolderEdit'];
$MM = $_POST['expMMEdit'];
$YY = $_POST['expYYEdit'];
$cardVerification = $_POST['cardCvvEdit'];

$update = "UPDATE metodopago SET cardNumber = '$numberCard', cardHolder = '$nameCard', expMM = '$MM', expYY = '$YY', cvv = '$cardVerification' WHERE correoUsuario = '$correo'";
$query = mysqli_query($conexion, $update);

header('location:User/actualizarPagoUser.php');
?>