<?php

    require 'socios.php';
    session_start();

    $socios = $_SESSION['socio'];
    $dni = $_POST['_dni'];
    $posicion = 0;

    foreach($socios as $list) {

        if ($list->get_dni() == $dni){
            array_splice($socios, $posicion, 1);
            break;
        }

        $posicion++;
    }

    $_SESSION['socio'] = $socios;

    header('Location:listadosocios.php');

?>