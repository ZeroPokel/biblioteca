<?php
    require 'socios.php';
    require 'libreria.php';
    session_start();

    if(!isset($_SESSION['libro'])){
        $_SESSION['libro'] = [];
        $nuevolibro = new Libro('1', 'Titulo 1', 'Autor 1', '2022-10-20');
        array_push($_SESSION["libro"], $nuevolibro);
    
        $nuevolibro = new Libro('2', 'Titulo 2', 'Autor 2', '2022-10-21');
        array_push($_SESSION["libro"], $nuevolibro);
    
        $nuevolibro = new Libro('3', 'Titulo 3', 'Autor 3', '2022-10-22');
        array_push($_SESSION["libro"], $nuevolibro);
    }

    if (!isset($_SESSION['socio'])){
        $_SESSION['socio'] = [];
        $nuevosocio = new Socio('Nombre socio 1', 'DNI 1', 'Apellidos socio 1', '1',  'Direccion 1');
        array_push($_SESSION["socio"], $nuevosocio);

        $nuevosocio = new Socio('Nombre socio 2', 'DNI 2', 'Apellidos socio 2', '2',  'Direccion 2');
        array_push($_SESSION["socio"], $nuevosocio);

        $nuevosocio = new Socio('Nombre socio 3', 'DNI 3', 'Apellidos socio 3', '3',  'Direccion 3');
        array_push($_SESSION["socio"], $nuevosocio);
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    
    <h1>Biblioteca</h1>
    <form action="listado.php" method="post">
        <input type="submit" value="Libros"/>
    </form>
    <form action="listadosocios.php" method="post">
        <input type="submit" value="Socios"/>
    </form>
</body>
</html>

