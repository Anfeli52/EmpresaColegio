<?php
include 'conexion.php';
session_start();
$correo = $_SESSION['email'];

$sqlDW = "SELECT * FROM dw23";
$resultadoDW = $conexion->query($sqlDW);

while ($data2 = $resultadoDW->fetch_assoc()) {
    $nameProducto = $data2['nameProducto'];
    $precioProducto = $data2['precioProducto'];
}

$cantidad = $_POST['cantidad'];

$total = $cantidad * $precioProducto;

$insert = "INSERT INTO ventas(correoCliente, productName, cantidad, precioTotal, estadoEnvio) VALUES ('$correo', '$nameProducto', '$cantidad', '$total', 'Success')";
mysqli_query($conexion, $insert);
echo '<script>alert("Su pago se realizó con éxito. Muchas gracias :D. YAXJA"); window.location.href = "User/ProductoDw23.php";</script>';
?>