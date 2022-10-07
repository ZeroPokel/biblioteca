<?php

    require 'libreria.php';
    session_start();

    $libros = $_SESSION['libro'];
    $isbn = $_POST['_isbn'];
    $posicion = 0;

    foreach($libros as $list) {

        if ($list->get_isbn() == $isbn){
            $titulo = $list->get_titulo();
            $autor = $list->get_autor();
            $fecha = $list->get_fecha();
            break;
        }

        $posicion++;
    }

    echo "<form method='post' action='editalibro.php'>
            <label>ISBN</label>
                <input type='number' name='isbn' required='true' value='$isbn'>
            <br/>
            <label>Título </label>
                <input type='text' name='titulo' required='true' value='$titulo'>
            <br/>
            <label>Autor</label>
                <input type='text' name='autor' required='true' value='$autor'>
            <br/>
            <label>Fecha de publicación </label>
                <input type='date' name='fecha' required='true' value='$fecha'>
            <br/>
            <input type='submit' value='Editar'>
            <input type='hidden' name='i' value='$posicion'/>
    </form>";

?>