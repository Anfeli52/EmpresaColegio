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
    header('location:../HTML/login.php');
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


if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        if ($row['tipoUsuario'] == 'user') {
            $userType = "<div class='select'>
                            <select>
                                <option value='user'> User </option>
                                <option value='admin'> Admin </option>
                            </select>
                        </div>";
        } else {
            $userType = "<div class='select'>
                            <select>
                                <option value='admin'> Admin </option>
                                <option value='user'> User </option>
                            </select>
                        </div>";
        }
        $html .= '<tr>';
            $html .= '<td>' . $row['correo'] . '</td>';
            $html .= '<td>' . $row['nombre'] . '</td>';
            $html .= '<td>' . $row['apellido'] . '</td>';
            $html .= '<td>' . $row['username'] . '</td>';
            $html .= '<td>' . $row['telefono'] . '</td>';
            $html .= '<td>' . $row['tipoUsuario'] . '</td>';
            $html .= '<td class="edit-table"><a href="usersAdminPage.php?editedId='.$row['correo'].'">Edit</a></td>';
            $html .= '<td  class="eliminate-table"><a href="usersAdminPage.php?deletedId='.$row['correo'].'" onclick="eliminar()">Delete</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="8">Without results</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
