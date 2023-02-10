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
}else if($tipoUsuario!="user"){
    header('location:../Admin/adminMainPage.php');
}else{
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $username=$data['username'];
        $correo=$data['correo'];
        $nombre=$data['nombre'];
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
    <link rel="shortcut icon" href="../../IMG/logoheader.png">
    <title>Actualizar Método de Pago</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../CSS/User/Setting/actualizarPagoUserStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>

    <header>

        <div class="logo">
            <img src="../../IMG/logoYaxja.jpeg" alt="#" height="32" width="32">
        </div>

        <div class="box">
            <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
        </div>

        <nav class="options-header">
            <a href="userMainPage.php" class="opciones">Inicio</a>
            <a href="contaminacionUserPage.php" class="opciones">Contaminación</a>
            <a href="campanasUserPage.php" class="opciones">Campañas</a>
            <a href="#" class="opciones">Yaxjaneitor3000</a>
        </nav>

    </header>    

    <main>

        <div class="container">
            <div class="foticousuario">
                <div class="foto">
                    <img src="<?php echo $foto; ?>" alt="#" size="48" height="48" width="48" class="avatar">

                    <div class="infoto">
                        <h1 class="h1foto"> <a href="#"><?php echo $username ?></a> </h1>

                        <div class="descripfoto">
                            <p>Tu cuenta personal :D</p>
                        </div>
                    </div>
                    
                </div>
            </div> <!--DIV FOTICOUSUARIO-->

            <div class="layout">
                <div class="layout-izq"> <!--LISTA-->
                    <div class="lista">
                        <ul class="menuajustes">
                            <li> <!--INICIO PARTE 1-->
                                <ul>
                                    
                                    <li class="ajustes">
                                        <a href="cuentaUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-gear"></i></span>
                                            <span class="textlist">Cuenta</span>
                                        </a>
                                    </li>
                                    <li class="ajustes">
                                        <a href="notificacionesUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-bell"></i></span>
                                            <span class="textlist">Notificaciones</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 1-->
                            
                            <li class="separador"></li>

                            <li> <!--INICIO PARTE 2-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Acceso</h3>
                                    </li>
                                    
                                    <li class="ajustes">
                                        <a href="emailUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-envelope"></i></span>
                                            <span class="textlist">Email</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 2-->

                            <li class="separador"></li>

                            <li> <!--INICIO PARTE 3-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Seguridad</h3>
                                    </li>
                                    
                                    <li class="ajustes">
                                        <a href="contrasenaUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-shield-halved"></i></span>
                                            <span class="textlist">Contraseña y Autenticación</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 3-->

                            <li class="separador"></li>

                            <li> <!--INICIO PARTE 4-->
                                <ul>
                                    <li>
                                        <h3 class="titumenu">Método de Pago</h3>
                                    </li>
                                    
                                    <li class="ajustes">
                                        <a href="actualizarPagoUser.php" class="contentajustes-especial">
                                            <span class="iconolist"><i class="fa-solid fa-rotate"></i></span>
                                            <span class="textlist-especial">Actualizar Método de Pago</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="historialPagoUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-clock-rotate-left"></i></span>
                                            <span class="textlist">Historial</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="limiteGastoUser.php" class="contentajustes">
                                            <span class="iconolist"><i class="fa-sharp fa-solid fa-dollar-sign"></i></span>
                                            <span class="textlist">Administrar Límite de Gasto</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> <!--FIN PARTE 4-->
                        </ul>
                    </div>
                </div> <!--FIN LISTA OSEA LAYOUT IZQUIERDO-->

                <div class="layout-der">
                    <div class="layout-main">
                        <div class="container-md"> <!--METER EL CONTENIDO EN EL CONTAINER-MD-->

                            <div class="subhead">
                                <h2 class="subhead-text">
                                    Actualizar Método de Pago
                                </h2>
                            </div> <!--SUBHEAD------------------------------ A PARTIR DE AQUI LLENAR  -->

                            <div class="js_billing" id="Advert_add_info" hidden>
                                <div class="warn_add_info">
                                    <i class="fa-solid fa-triangle-exclamation"></i> Por favor actualiza la información en "Datos de Facturación" para añadir un método de pago.
                                    <button class="btn_close" onclick="CloseAdvert()">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="infoBilletera">
                                <div class="flex_info">
                                    <div>
                                        <h4 class="datos_billing"> Datos de Facturación </h4>

                                        <div class="info_billetera_resumen" id="resumen">
                                            <ul class="datos_resumen">
                                                <li class="name_billetera">Pancho Panza</li> <!--AQUI VA EL NOMBRE + APELLIDO QUE HAYA INGRESADO (ACOMODAR, LO QUE APARECE ES EJEMPLO)-->
                                                <li class="rest_billetera">Cra. 23 #15N23</li> <!--AQUI VA LA DIRECCION QUE HAYA INGRESADO (ACOMODAR, LO QUE APARECE ES EJEMPLO)-->
                                                <li class="rest_billetera">Barrancabermeja, Santander</li> <!--AQUI VA LA CIUDAD, ESTADO/PROVINCIA QUE HAYA INGRESADO (ACOMODAR, LO QUE APARECE ES EJEMPLO)-->
                                                <li class="rest_billetera">Colombia</li> <!--AQUI VA EL PAIS QUE HAYA INGRESADO (ACOMODAR, LO QUE APARECE ES EJEMPLO)-->
                                            </ul>
                                        </div>

                                        <div class="user_info" id="add_infobilletera"> <!--AÑADIR JS PARA QUE CUANDO YA ESTE AÑADIDO UN METODO DE PAGO APAREZCA LA INFO AHI, SI YA INGRESO LOS DATOS DE FACTURACION QUE LO DEJE AÑADIR METODO DE PAGO, SINO QUE LE APAREZCA LA ADVERTENCIA DE ID="ADVERT_ADD_INFO" PERO CUANDO PRESIONE "AÑADIR INFORMACION", SINO HA AÑADIDO ESTA INFO QUE LE SALGA DE ONE PA QUE PUEDA INGRESAR, SI YA LA AÑADIO QUE LE APAREZCA LA CLASE "INFO_BILLETERA_RESUMEN"-->
                                            <form action="">
                                                <div class="flex_column">
                                                    <div class="d-flex"> <!--INPUTS NOMBRES INICIO--------------------------------------------------------------------------->
                                                        <div class="FormControl flex-1"> <!--INICIO NOMBRE---------------------------------------------->
                                                            <label for="" class="FormControl-label"> Nombre <span class="ajio">*</span> </label>
                                                            <div class="FormControl-input"> <input type="text" class="ingresaInfo" placeholder="Pancho"> </div> <!--INGRESAR NOMBRE (QUITAR EL PLACEHOLDER)-->
                                                        </div> <!--FIN NOMBRE--------------------------------------------------------------------------->

                                                        <div class="FormControl flex-1"> <!--INICIO APELLIDO---------------------------------------------->
                                                            <label for="" class="FormControl-label"> Apellido <span class="ajio">*</span> </label>
                                                            <div class="FormControl-input"> <input type="text" class="ingresaInfo" placeholder="Panza"> </div> <!--INGRESAR APELLIDO (QUITAR EL PLACEHOLDER)-->
                                                        </div> <!--FIN APELLIDO--------------------------------------------------------------------------->
                                                    </div> <!--INPUTS NOMBRES FIN------------------------------------------------------------------------------------------->

                                                    <div class="FormControl flex-1"> <!--INICIO DIRECCION 1---------------------------------------------->
                                                        <label for="" class="FormControl-label"> Dirección 1 <span class="ajio">*</span> </label>
                                                        <div class="FormControl-input"> <input type="text" class="ingresaInfo" placeholder="Cra. 23 #15N23"> </div> <!--INGRESAR DIRECCION 1 (QUITAR EL PLACEHOLDER)-->
                                                    </div> <!--FIN DIRECCION 1--------------------------------------------------------------------------->

                                                    <div class="FormControl flex-1"> <!--INICIO DIRECCION 2---------------------------------------------->
                                                        <label for="" class="FormControl-label"> Dirección 2 </label>
                                                        <div class="FormControl-input"> <input type="text" class="ingresaInfo"> </div> <!--INGRESAR DIRECCION 2-->
                                                    </div> <!--FIN DIRECCION 2--------------------------------------------------------------------------->

                                                    <div class="d-flex"> <!--INPUTS CIUDAD/POSTAL INICIO--------------------------------------------------------------------------->
                                                        <div class="FormControl flex-1"> <!--INICIO CIUDAD---------------------------------------------->
                                                            <label for="" class="FormControl-label"> Ciudad <span class="ajio">*</span> </label>
                                                            <div class="FormControl-input"> <input type="text" class="ingresaInfo" placeholder="Barrancabermeja"> </div> <!--INGRESAR CIUDAD (QUITAR EL PLACEHOLDER)-->
                                                        </div> <!--FIN CIUDAD--------------------------------------------------------------------------->

                                                        <div class="FormControl flex-1"> <!--INICIO POSTAL---------------------------------------------->
                                                            <label for="" class="FormControl-label"> Código Postal <span class="ajio">*</span> </label>
                                                            <div class="FormControl-input"> <input type="text" class="ingresaInfo" placeholder="123456"> </div> <!--INGRESAR POSTAL (QUITAR EL PLACEHOLDER)-->
                                                        </div> <!--FIN POSTAL--------------------------------------------------------------------------->
                                                    </div> <!--INPUTS CIUDAD/POSTAL FIN------------------------------------------------------------------------------------------->

                                                    <div class="d-flex"> <!--INPUTS PAIS INICIO--------------------------------------------------------------------------->
                                                        <div class="FormControl flex-1"> <!--INICIO PAIS---------------------------------------------->
                                                            <label for="" class="FormControl-label"> País <span class="ajio">*</span> </label>
                                                            <div class="FormControl-select"> <select class="select_country">
                                                                <option value="">Colombia</option> <!--CAMBIAR DE LUGAR CON ESCOGE TU PAIS-->
                                                                <option value="">Antigua y Barbuda</option>
                                                                <option value="">Argentina</option>
                                                                <option value="">Bahamas</option>
                                                                <option value="">Barbados</option>
                                                                <option value="">Belice</option>
                                                                <option value="">Bolivia</option>
                                                                <option value="">Brasil</option>
                                                                <option value="">Canadá</option>
                                                                <option value="">Chile</option>
                                                                <option value="">Escoge tu país</option> <!--CAMBIAR DE LUGAR CON COLOMBIA-->
                                                                <option value="">Costa Rica</option>
                                                                <option value="">Cuba</option>
                                                                <option value="">Dominica</option>
                                                                <option value="">Ecuador</option>
                                                                <option value="">El Salvador</option>
                                                                <option value="">Estados Unidos</option>
                                                                <option value="">Granada</option>
                                                                <option value="">Guatemala</option>
                                                                <option value="">Guyana</option>
                                                                <option value="">Haití</option>
                                                                <option value="">Honduras</option>
                                                                <option value="">Jamaica</option>
                                                                <option value="">México</option>
                                                                <option value="">Nicaragua</option>
                                                                <option value="">Panamá</option>
                                                                <option value="">Paraguay</option>
                                                                <option value="">Perú</option>
                                                                <option value="">Repúlica Dominicana</option>
                                                                <option value="">San Cristóbal y Nieves</option>
                                                                <option value="">San Vicente y las Granadinas</option>
                                                                <option value="">Santa Lucía</option>
                                                                <option value="">Surinam</option>
                                                                <option value="">Trinidad y Tobago</option>
                                                                <option value="">Uruguay</option>
                                                                <option value="">Venezuela</option> </select> <div class="flechita"><i class="fa-sharp fa-solid fa-caret-down"></i></div> 
                                                            </div> <!--SELECCIONAR PAIS-->
                                                        </div> <!--FIN PAIS--------------------------------------------------------------------------->

                                                        <div class="FormControl flex-1"> <!--INICIO ESTADO---------------------------------------------->
                                                            <label for="" class="FormControl-label"> Estado/Provincia <span class="ajio">*</span> </label>
                                                            <div class="FormControl-input"> <input type="text" class="ingresaInfo" placeholder="Santander"> </div> <!--INGRESAR ESTADO-->
                                                        </div> <!--FIN ESTADO--------------------------------------------------------------------------->
                                                    </div> <!--INPUTS PAIS/ESTADO FIN------------------------------------------------------------------------------------------->

                                                    <div class="d-flex2">
                                                        <button type="button" class="save" onclick="Save_Payment_Method()">
                                                            <span class="btn-content">
                                                                <span class="btn-label"> Guardar </span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    
                                    <div class="text-right" onclick="editar_infobilletera()">
                                        <div class="text-edit"> Editar </div>
                                    </div>
                                </div>
                            </div> <!--FIN INFOBILLETERA-->

                            <div class="payment_method"> <!--AÑADIR METODO DE PAGO-->
                                <div class="d-flex3">
                                    <div>
                                        <h4 class="datos_billing" id="add_title">Método de Pago</h4>
                                        <div class="Estado_Metodo_Pago" id="estado_de_pago"> <p class="state_payment">No tienes añadido ningún método de pago.</p> </div> <!--ESTADO METODO DE PAGO-->
                                    </div>

                                    <div class="text_right">
                                        <div class="btn_add_payment_information" onclick="AddInfo()">
                                            Añadir Información
                                        </div> 
                                    </div>
                                </div>

                                <div class="box_add" id="box_add_payment"> 
                                    <div class="payment_methods" id="selectMethods">
                                        <span class="PayWith">
                                            Paga con:
                                        </span>

                                        <div class="radio-group clearfix">
                                            <button class="radio_payment" id="credit" onclick="select_payment_credit()" hidden></button>
                                            <label for="credit" class="radio-label" id="label_select_payment_credit"> Tarjeta de Crédito </label>
                                            <button class="radio_payment" id="paypal" onclick="select_payment_paypal()" hidden></button>
                                            <label for="paypal" class="radio-label" id="label_select_payment_paypal"> Paypal </label>
                                        </div>
                                    </div>

                                    <div class="tarjet_info" id="insert_credit">
                                        <form action="">
                                            <div class="flex_column" id="card_info">
                                                <div class="FormControl flex-1"> <!--INICIO CARD NUMBER 1---------------------------------------------->
                                                    <label for="" class="FormControl-label"> Número de Tarjeta <span class="ajio">*</span> </label>
                                                    <div class="FormControl-input"> <input type="text" class="ingresaInfo"> </div> <!--INGRESAR CARD NUMBER 1-->
                                                </div> <!--FIN CARD NUMBER 1--------------------------------------------------------------------------->

                                                <div class="d-flex cvv_year_month"> <!--INPUTS MES/AÑO/CVV INICIO--------------------------------------------------------------------------->
                                                    <div class="FormControl flex-1 more_info"> <!--INICIO MES---------------------------------------------->
                                                        <label for="" class="FormControl-label"> Fecha de Expiración <span class="ajio">*</span> </label>
                                                        <div class="FormControl-select"> <select class="select_country expiration_date">
                                                            <option value="">- Selecciona uno -</option>
                                                            <option value="">01</option>
                                                            <option value="">02</option>
                                                            <option value="">03</option>
                                                            <option value="">04</option>
                                                            <option value="">05</option>
                                                            <option value="">06</option>
                                                            <option value="">07</option>
                                                            <option value="">08</option>
                                                            <option value="">09</option>
                                                            <option value="">10</option>
                                                            <option value="">11</option>
                                                            <option value="">12</option>
                                                            </select> <div class="flechita2"><i class="fa-sharp fa-solid fa-caret-down"></i></div> 
                                                        </div> <!--SELECCIONAR MES-->
                                                    </div> <!--FIN MES--------------------------------------------------------------------------->
                                                    
                                                    <span id="separator"> / </span>
                                            
                                                    <div class="FormControl flex-1"> <!--INICIO AÑO---------------------------------------------->
                                                        <div class="FormControl-select"> <select class="select_country expiration_date year">
                                                            <option value="">- Selecciona uno -</option>
                                                            <option value="">2023</option>
                                                            <option value="">2024</option>
                                                            <option value="">2025</option>
                                                            <option value="">2026</option>
                                                            <option value="">2027</option>
                                                            <option value="">2028</option>
                                                            <option value="">2029</option>
                                                            <option value="">2030</option>
                                                            </select> <div class="flechita2"><i class="fa-sharp fa-solid fa-caret-down"></i></div> </div> <!--INGRESAR AÑO-->
                                                    </div> <!--FIN AÑO--------------------------------------------------------------------------->
                                            
                                                    <div class="FormControl flex-1 cvv"> <!--INICIO CVV---------------------------------------------->
                                                        <label for="" class="FormControl-label"> CVV <span class="ajio">*</span> </label>
                                                        <div class="FormControl-input input_cvv"> <input type="number" class="ingresaInfo" maxlength="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> </div> <!--INGRESAR CVV-->
                                                    </div> <!--FIN CVV--------------------------------------------------------------------------->
                                                </div> <!--INPUTS MES/AÑO/CVV FIN------------------------------------------------------------------------------------------->
                                            </div>
                                        </form>

                                        <div class="btn_save_card">
                                            <button type="submit" class="save" onclick="Save_Payment_Method()">
                                                <a href="#"> Guardar Información </a>
                                            </button>
                                        </div>
    
                                        <div class="btn_cancel_method">
                                            <button class="cancel" onclick="CloseAddPayment()">
                                                Cancel
                                            </button>
                                        </div>
                                    </div> <!--FIN DIV PARA INGRESAR TARJETA DE CREDITO-->

                                    <div class="paypal_info" id="insert_paypal">
                                        <form action="">
                                            <div class="paypal_method_details">
                                                <div class="paypal_label"> Registrase en: </div>

                                                <div class="paypal_logo_url">
                                                    <a href="#" style="display: block; width: 115px; height: 44px;"> <!--METER LINK PARA PAGAR CON PAYPAL O YO NOSE-->
                                                    <img src="https://checkout.paypal.com/pwpp/1.6.1/images/pay-with-paypal.png" alt="Pay with PayPal" style="max-width: 100%; display: block; width: 100%; height: 100%; outline: none; border: 0px;"></a> <!--TERMINAR QUE CUANDO YA HAYA INGRESADO SU PAYPAL APAREZCA EL BOTON DE GUARDAR-->
                                                </div>
                                            </div>
                                        </form>

                                        <div class="btn_cancel_method">
                                            <button class="cancel" onclick="CloseAddPayment()">
                                                Cancel
                                            </button>
                                        </div>
                                    </div> <!--FIN DIV PARA INGRESAR EL PAYPAL-->
                                </div>
                            </div> <!--FIN AÑADIR METODO DE PAGO-->

                        </div> <!--CONTAINER DEL LAYOUT DERECHO-->
                    </div> <!--LAYOUT MAIN-->
                </div> <!--LAYOUT DERECHO-->
            </div> <!--FIN LAYOUT-->
        </div>

    </main>

    <footer></footer>
    
<script src="../../JS/MenuAjustes/Adverts.js"></script>

</body>
</html>