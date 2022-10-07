<?php

    require 'socios.php';
    session_start();

    $socios = $_SESSION['socio'];
    $dni = $_POST['_dni'];
    $posicion = 0;

    foreach($socios as $list) {

        if ($list->get_dni() == $dni){
            $nombre = $list->get_nombre();
            $apellidos = $list->get_apellidos();
            $telefono = $list->get_telefono();
            $direccion = $list->get_direccion();
            break;
        }

        $posicion++;
    }
    
    echo "<form method='post' action='editasocios.php'>
            <label>Nombre</label>
            <input type='text' name='nombre' required='true' value='$nombre'>
            <br/>
            <label>DNI</label>
                <input type='text' name='dni' required='true' value='$dni'>
            <br/>
            <label>Apellidos </label>
                <input type='text' name='apellidos' required='true' value='$apellidos'>
            <br/>
            <label>Teléfono</label>
                <input type='text' name='telefono' required='true' value='$telefono'>
            <br/>
            <label>Dirección </label>
                <input type='text' name='direccion' required='true' value='$direccion'>
            <br/>
            <input type='submit' value='Editar'>
            <input type='hidden' name='i' value='$posicion'/>
    </form>";

?>