<?php

session_start();
include '../conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '" . $user . "';";
$result = $conexion->query($select);
while ($datos = $result->fetch_assoc()) {
    $tipoUsuario = $datos['tipoUsuario'];
}

if ($user == null || $user == "") {
    header('location:../../HTML/login.html');
} else if ($tipoUsuario != "admin") {
    header('location:../User/userMainPage.php');
} else {
    $sql = "SELECT * FROM usuario WHERE correo = '" . $user . "';";
    $resultado = $conexion->query($sql);

    while ($data = $resultado->fetch_assoc()) {
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
    <link rel="stylesheet" href="../../CSS/Admin/usersAdminPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Inicio</title>
</head>

<body>
    <div class="loader">
        <div></div>
    </div>
    <div class="body-dark" id="body"></div>
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
                    <li><a href="adminMainPage.php">
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
                            <span class="navItemAdmin">DW-23</span>
                        </a></li>
                    <li><a href="#">
                            <i class="fas fa-users"></i>
                            <span class="navItemAdmin">Usuarios</span>
                        </a></li>
                    <li><a href="#">
                            <i class="fas fa-message"></i>
                            <span class="navItemAdmin">Chat</span>
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
            <div class="container py-4 text-center">
                <h2>Usuarios Registrados</h2>
                <div class="row">
                    <div class="columna">
                        <form action="" method="post">
                            <div class="container1">
                                <label for="campo"></label>
                                <input type="text" name="campo" id="campo" placeholder="Buscar">
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>Correo</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Username</th>
                                    <th>Teléfono</th>
                                    <th>Tipo de Usuario</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- El id del cuerpo de la tabla. -->
                            <tbody id="content">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--INICIO EDITAR DATOS TABLA USUARIOS-->
            <div class="dialog d-flex flex-column box--overlay box" id="mensaje_borrar">
                <div class="box_header">
                    <button type="button" class="box_btn_close" onclick="closedialog()">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <h2 class="box_title"> ¿Estás seguro que quieres hacer esto? </h2>
                </div>
                <div class="box_advert">
                    <i class="fa-solid fa-triangle-exclamation" style="height: 16px;"></i> Esto es extremadamente importante.
                </div>
                <div class="box_body">
                    <h3><strong>EDITAR DATOS</strong></h3>
                    <hr>
                    </hr>
                    <form action="updateUsers.php" id="frmajax" enctype="multipart/form-data" method="post">
                        <p class="delete_account_text">
                            <label class="options"> Correo: </label>
                            <input type="email" name="usuarioCorreo" class="form-control" required value="">
                        </p>

                        <p class="delete_account_text">
                            <label class="options"> Nombre: </label>
                            <input type="text" name="usuarioNombre" class="form-control" required value="">
                        </p>

                        <p class="delete_account_text" id="last_camp">
                            <label class="options"> Apellido: </label>
                            <input type="text" name="usuarioApellido" class="form-control" required value="">
                        </p>
                        <p class="delete_account_text">
                            <label class="options"> Username: </label>
                            <input type="text" name="usuarioUsername" class="form-control" required value="">
                        </p>

                        <p class="delete_account_text">
                            <label class="options"> Teléfono: </label>
                            <input type="number" name="usuarioTelefono" class="form-control" required value="">
                        </p>

                        <p class="delete_account_text" id="last_camp">
                            <label class="options"> Tipo de Usuario: </label>
                            <select class="sectionUserType" name="usuarioTipoUsuario">
                                <option>admin</option>
                                <option>user</option>
                            </select>
                        </p>
                        <div class="botones">
                            <button type="submit" class="btn_update_account"> Actualizar </button>
                            <button type="reset" class="btn_cancelUpdate_account" onclick="closedialog()"> Cancelar </button>
                        </div>
                    </form>
                </div>
            </div>
            <!---------------------------------------------------------------------ELIMINAR CAMPO--------------------------------------------------------------------->
            <div class="dialog d-flex flex-column box--overlay box" id="eliminarCampo">
                <div class="box_header">
                    <button type="button" class="box_btn_close" onclick="closedialog()">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <h2 class="box_title"> ¿Estás seguro que quieres hacer esto? </h2>
                </div>
                <div class="box_advert">
                    <i class="fa-solid fa-triangle-exclamation" style="height: 16px;"></i>
                </div>
                <div class="box_body">
                    <p> Eliminaremos de inmediato de Yaxja. </p>
                    <label class="delete"> Para verificar, escribe <i>borrar campo</i> abajo: </label>
                    <hr>
                    </hr>
                    <form action="deleteField.php" method="post">
                        <p class="delete_account_text">
                            <input type="text" name="deletedField" class="form-deleted-field" required>
                        </p>
                        <div class="botones">
                            <button type="submit" class="btn_cancelUpdate_account"> Eliminar </button>
                            <button type="reset" class="btn_update_account" onclick="closedialog()"> Cancelar </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
            $(".page").fadeIn(1000);
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        /* Llamando a la función getData() */
        getData();
        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", getData);
        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value;
            let content = document.getElementById("content");
            let url = "../tablaUsuarios.php";
            let formaData = new FormData()
            formaData.append('campo', input);
            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../../JS/usersAdministration.js"></script>

    <script>
        $(document).ready(function() {

            //Cuando de click en el boton guardar realiza el ajax
            $('#btnguardar').click(function() {
                var datos = $('#frmajax').serialize();

                // alert(datos);
                //return false;
                //ajax lleva 4 cosas en su estructura
                $.ajax({
                    //metodo
                    type: "POST",
                    //Archivo PHP para enviar los datos
                    url: "#",
                    data: datos,
                    success: function(r) {
                        //retorna un echo de php
                        if (r == 1) {
                            alert("Tengo los datos");
                            document.getElementById('').value;
                            document.getElementById('').value;
                            document.getElementById('').value;
                            document.getElementById('').value;
                            document.getElementById('').value;
                        } else {
                            alert("No tomé ningún dato");
                        }
                    }

                });
                //submit evita que se recargue
                return false;
            });
        });
    </script>
</body>

</html>