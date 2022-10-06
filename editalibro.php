<?php  
    require 'libreria.php';

    session_start();
    $libros = $_SESSION['libro'];
    $pos = $_POST['i'];

    $nuevolibro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'], $_POST['fecha']);

    $libros[$pos] = $nuevolibro;
    $_SESSION['libro'] = $libros;
    
    header('Location:listado.php');
?>
