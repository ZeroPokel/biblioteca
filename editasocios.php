<?php  
    require 'socios.php';

    session_start();
    $socios = $_SESSION['socio'];
    $pos = $_POST['i'];

    $nuevosocio = new Socio($_POST['nombre'], $_POST['dni'], $_POST['apellidos'], $_POST['telefono'],  $_POST['direccion']);

    $socios[$pos] = $nuevosocio;
    $_SESSION['socio'] = $socios;
    
    header('Location:listadosocios.php');
?>
