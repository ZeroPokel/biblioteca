<?php  
    require 'libreria.php';

    session_start();

    $nuevolibro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'], $_POST['fecha']);

    array_push($_SESSION["libro"], $nuevolibro);

    header('Location:listado.php');
?>
