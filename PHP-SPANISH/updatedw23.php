<?php

include 'conexion.php';

$name = $_POST['productName'];
$description = $_POST['productDescription'];
$price = $_POST['productPrice'];
$feature1 = $_POST['productFeature1'];
$feature2 = $_POST['productFeature2'];
$feature3 = $_POST['productFeature3'];

$update = "UPDATE dw23 SET nameProducto = '$name', descripcionProducto = '$description', precioProducto = '$price', caracteristica1 = '$feature1', caracteristica2 = '$feature2', caracteristica3 = '$feature3'";
$query = mysqli_query($conexion, $update);
header('location: Admin/dw-23.php');

?>