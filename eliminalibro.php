<?php

    require 'libreria.php';
    session_start();

    $libros = $_SESSION['libro'];
    $isbn = $_POST['_isbn'];
    $posicion = 0;

    foreach($libros as $list) {

        if ($list->get_isbn() == $isbn){
            array_splice($libros, $posicion, 1);
            break;
        }

        $posicion++;
    }

    $_SESSION['libro'] = $libros;

    header('Location:listado.php');

?>