<?php
include 'conexion.php';
session_start();
$correo = $_SESSION['email'];

$cardNumber = $_POST['cardNumber'];
$cardHolder = $_POST['cardHolder'];
$expMM = $_POST['expMM'];
$expYY = $_POST['expYY'];
$cvv = $_POST['cardCvv'];

$insert = "INSERT INTO metodopago(cardNumber, cardHolder, expMM, expYY, cvv, correoUsuario) VALUES ('$cardNumber', '$cardHolder', '$expMM', '$expYY', '$cvv', '$correo')";
mysqli_query($conexion, $insert);
header('location:User/actualizarPagoUser.php');

?>