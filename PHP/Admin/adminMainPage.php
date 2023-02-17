<?php 

session_start();
include '../conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '".$user."';";
$result = $conexion->query($select);
while($datos=$result->fetch_assoc()){
    $tipoUsuario = $datos['tipoUsuario'];
}

if($user==null || $user==""){
    header('location:../../HTML/login.html');
}else if($tipoUsuario!="admin"){
    header('location:../User/userMainPage.php');
}else{
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username = $data['username'];
        $correo = $data['correo'];
        $nombre = $data['nombre'];
        $foto = $data['fotoPerfil'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Admin/adminMainPageStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Inicio</title>
</head>
<body>
    <div class="loader">
        <div></div>
    </div>
    <div class="page">
        <header>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="#" class="logo">
                            <img src="<?php echo $foto; ?>" alt="">
                            <span class="navItemAdmin">
                                <?php echo $username ?>
                            </span>
                        </a>
                    </li>
                    <li><a href="#">
                        <i class="fas fa-home"></i>
                        <span class="navItemAdmin">Inicio</span>
                    </a></li>
                    <li><a href="contaminacionAdminPage.php">
                        <i class="fas fa-radiation"></i>
                        <span class="navItemAdmin">Contaminación</span>
                    </a></li>
                    <li><a href="campanasAdminPage.php">
                        <i class="fas fa-tags"></i>
                        <span class="navItemAdmin">Campañas</span>
                    </a></li>
                    <li><a href="#">
                        <i class="fas fa-tasks"></i>
                        <span class="navItemAdmin">Yaxjaneitor3000</span>
                    </a></li>
                    <li><a href="usersAdminPage.php">
                        <i class="fas fa-users"></i>
                        <span class="navItemAdmin">Usuarios</span>
                    </a></li>
                    <li><a href="#">
                        <i class="fas fa-download"></i>
                        <span class="navItemAdmin">Actualizar Campañas</span>
                    </a></li>
                    <li><a href="cuentaAdmin.php">
                        <i class="fas fa-cog"></i>
                        <span class="navItemAdmin">Configuración</span>
                    </a></li>
                    <!-- <li><a href="contactUsAdmin.html">
                        <i class="fas fa-phone"></i>
                        <span class="navItemAdmin">Contacto</span>
                    </a></li> -->
                    <!--<li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="navItemAdmin">Configuración</span>
                    </a></li> -->
                    <li><a href="../../PHP/logout.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="navItemAdmin">Cerrar Sesión</span>
                    </a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="dashboard">
                <h1>Administrador</h1>
                <div class="date">
                    <input type="date" id="fechaNacimiento" min="2016-01-01" max="2022-12-31">
                </div>
                <div class="insights">
                    <div class="sales">
                        <span class="material-symbols-outlined">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Ganancias Totales</h3>
                                <h1>$32,695</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>81%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <div class="expenses">
                        <span class="material-symbols-outlined">bar_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Usuarios Conectados</h3>
                                <h1>132</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <div class="income">
                        <span class="material-symbols-outlined">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Ventas Totales</h3>
                                <h1>52</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>52%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                </div>
                <div class="recent-orders">
                    <h2>Recent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Product Name</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>85631</td>
                                <td>Medidor de Contaminación</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>98776</td>
                                <td>Medidor de Contaminación</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>65657</td>
                                <td>Medidor de Contaminación</td>
                                <td>Due</td>
                                <td class="success">Success</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>87876</td>
                                <td>Medidor de Contaminación</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>93219</td>
                                <td>Medidor de Contaminación</td>
                                <td>Due</td>
                                <td class="success">Success</td>
                                <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#">Show All</a>
                </div>
            </div>
        </main>
    </div>
    <script>
        $(window).on('load',function(){
            $(".loader").fadeOut(1000);
            $(".page").fadeIn(1000);
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>