<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Límite de Gasto</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/StylesLimiteGasto.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>

    <header>

        <div class="logo">
            <img src="../IMAGENES/huevos.jpg" alt="#" height="32" width="32">
        </div>

        <div class="box">
            <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
        </div>

        <nav class="options-header">
            <a href="#" class="opciones">Aguapanela</a>
            <a href="#" class="opciones">Limonada</a>
            <a href="#" class="opciones">Arroz</a>
        </nav>

    </header>    

    <main>

        <div class="container">
            <div class="foticousuario">
                <div class="foto">
                    <img src="../IMAGENES/usuario.png" alt="#" size="48" height="48" width="48" class="avatar">

                    <div class="infoto">
                        <h1 class="h1foto"> <a href="#">DonPancho123</a> </h1>

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
                                        <a href="Cuenta.html" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-gear"></i></span>
                                            <span class="textlist">Cuenta</span>
                                        </a>
                                    </li>
                                    <li class="ajustes">
                                        <a href="Notificaciones.html" class="contentajustes">
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
                                        <a href="Email.html" class="contentajustes">
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
                                        <a href="Contrasena.html" class="contentajustes">
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
                                        <a href="ActualizarPago.html" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-rotate"></i></span>
                                            <span class="textlist">Actualizar Método de Pago</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="HistorialPago.html" class="contentajustes">
                                            <span class="iconolist"><i class="fa-solid fa-clock-rotate-left"></i></span>
                                            <span class="textlist">Historial</span>
                                        </a>
                                    </li>

                                    <li class="ajustes">
                                        <a href="LimiteGasto.html" class="contentajustes-especial">
                                            <span class="iconolist"><i class="fa-sharp fa-solid fa-dollar-sign"></i></span>
                                            <span class="textlist-especial">Administrar Límite de Gasto</span>
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
                                    Límites de gasto mensual
                                </h2>
                            </div> <!--SUBHEAD------------------------------ A PARTIR DE AQUI LLENAR  -->

                            <p class="mb-4"> Establece un límite de gasto mensual. Puedes ajustarlo en cualquier momento. </p>

                            <div class="flash-warn"> <!--ADEVERTENCIA POR SI NO TIENE NINGUN METODO DE PAGO AÑADIDO-->
                                <i class="fa-solid fa-triangle-exclamation"></i> <strong class="missing_method"> Falta el método de pago </strong>

                                <p class="small-text"> No puedes alterar los límites de gasto hasta que añadas un método de pago válido. </p>

                                <a href="ActualizarPago.html" class="btn-sm"> Añade un método de pago </a>
                            </div> <!--CUANDO HAYA UN METODO AÑADIDO QUE APAREZCA, SI HAY METODO DE PAGO AÑADIDO ESCONDER-->

                            <div class="spending-limit">
                                <div class="box_spending_limit">
                                    <form action="">
                                        <div class="Box-row">
                                            <label class="d-block">
                                                <input type="radio" class="form-checkbox" name="limited_or_unlimited"> Limitar el gasto <!--INFO DE ARRIBITA-->

                                                <div class="spending_note"> <!--DONDE ACTUALIZAS EL LIMITE DE GASTO-->
                                                    <p class="mb-1"> Establezca un límite de gasto mensual </p>

                                                    <div class="spending_details">
                                                        <div class="box_supdate">
                                                            <span class="dolar" style="line-height: 32px">$</span>
                                                            <input class="input_spendig_limit" type="number" name="spending-limit" min="0" placeholder="0.00">
                                                            <button type="button" class="btn_update_limit"onclick="Update_limit()"> Actualizar límite </button>
                                                        </div>
                                                        <p class="note_update"> Dejarlo en $0.00 evitará cualquier gasto extra </p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="Box-row">
                                            <label class="d-block">
                                                <input type="radio" class="form-checkbox" name="limited_or_unlimited"> Gastos ilimitados

                                                <p class="note_update spending_note"> Paga tanto como desees sin ningún límite. </p>
                                            </label>
                                        </div> <!--SEGUIMOS CON ESTA (UNLIMITED)-->
                                    </form>
                                </div> <!--FIN SPENDING LIMIT-->

                                <form action="">
                                    <div class="mt-4">
                                        <h4 class="email_alerts"> Alertas de correo electrónico </h4>
                                        <p class="email_text"> Reciba notificaciones por correo electrónico cuando el uso alcance los umbrales del 75 %, 90 % y 100 %. </p>

                                        <div class="email_checkbox">
                                            <label>
                                                <input type="checkbox" class="form-checkbox"> Incluir alertas de tus gastos 
                                                <span class="yes" id="chulito1"> <i class="fa-solid fa-check"></i> </span>
                                            </label>
                                        </div>
                                        <div class="email_checkbox">
                                            <label>
                                                <input type="checkbox" class="form-checkbox"> Alertas de cambios en el límite de gasto
                                                <span class="yes" id="chulito2"> <i class="fa-solid fa-check"></i> </span>
                                            </label>
                                        </div>
                                    </div>
                                </form> <!--EMAIL ALERTS-->
                            </div>

                        </div> <!--CONTAINER DEL LAYOUT DERECHO-->
                    </div> <!--LAYOUT MAIN-->
                </div> <!--LAYOUT DERECHO-->
            </div> <!--FIN LAYOUT-->
        </div>

    </main>

    <footer></footer>
    
<script src="../JS/Adverts.js"></script>

</body>
</html>