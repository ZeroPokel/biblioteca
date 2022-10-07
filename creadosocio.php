<?php  
    require 'socios.php';

    session_start();

    $nuevosocio = new Socio($_POST['nombre'], $_POST['dni'], $_POST['apellidos'], $_POST['telefono'],  $_POST['direccion']);

    array_push($_SESSION["socio"], $nuevosocio);

    header('Location:listadosocios.php');
?>