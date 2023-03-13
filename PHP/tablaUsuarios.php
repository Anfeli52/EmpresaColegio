<?php

session_start();
include 'conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '" . $user . "';";
$result = $conexion->query($select);
while ($datos = $result->fetch_assoc()) {
    $tipoUsuario = $datos['tipoUsuario'];
}

if ($user == null || $user == "") {
    header('location:../HTML/login.html');
} else {
    $sql = "SELECT * FROM usuario WHERE correo = '" . $user . "';";
    $resultado = $conexion->query($sql);

    while ($data = $resultado->fetch_assoc()) {
        $correo = $data['correo'];
    }
}

$columns = ['correo', 'nombre', 'apellido', 'username', 'telefono', 'tipoUsuario'];
$table = "usuario";
$campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT * FROM usuario $where";
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

/*
$query = "SELECT * FROM usuario";
$aña = mysqli_query($conexion, $query);
$numero = mysqli_num_rows($aña);
$i= 0;
while($row = $aña->fetch_assoc()){
    $i++;
    $algo=$row['correo'];
    echo $algo;
    $tamaño[$i]=is_string($algo);
    echo $tamaño;
    echo '<br>';
}
*/

$html = '';
$num = 0;
$i = 0;


if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $num++;
        /*if ($row['tipoUsuario'] == 'user') {
            $userType = "<select><option>user</option><option>admin</option></select>";
        } else {
            $userType = "<select><option>admin</option><option>user</option></select>";
        }*/
        $html .= '<tr>';
            $html .= '<td id = '.$row['correo'].'>' . $row['correo'] . '</td>';
            $html .= '<td id = '.$row['correo'].'>' . $row['nombre'] . '</td>';
            $html .= '<td id = '.$row['correo'].'>' . $row['apellido'] . '</td>';
            $html .= '<td id = '.$row['correo'].'>' . $row['username'] . '</td>';
            $html .= '<td id = '.$row['correo'].'>' . $row['telefono'] . '</td>';
            $html .= '<td id = '.$row['correo'].'>' . $row['tipoUsuario'] . '</td>';
            //$html .= '<td>' . $num . '</td>';
            $html .= '<td><button class= "editar" id='.$row['correo'].' onclick="editar()">Editar</button></td>';
            $html .= '<td><button class= "borrar" id='.$row['correo'].' onclick="deleteSpace()">Eliminar</button></td>';
        $html .= '</tr>';
        $i++;
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="8">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>