<?php 

$name = $_POST['nombre'];
$subject = $_POST['subject'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$mailheader = "From: ".$name."<".$correo.">\r\n";


$recipient = "medinadiaza45@gmail.com";

mail($recipient, $subject, $mensaje, $mailheader) or die("Error!");

echo "message send";
header("../HTML/contactUsAdmin.html")
?>