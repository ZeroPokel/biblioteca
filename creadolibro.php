<?php
    require('libro.php');
    session_start();

    $alta = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'], $_POST['fechapub']);

    array_push($_SESSION['libro'], $alta);

    header( "Location:http://localhost/app-php/biblioteca/listado.php" ); 

?>