<?php

include('conexion.php');

session_start();
session_unset();
session_destroy();

echo '<script>
        history.go(1);
        window.location.replace("../HTML/login.html"); 
    </script>';
?>