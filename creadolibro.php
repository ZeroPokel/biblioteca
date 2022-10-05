<?php
require('libro.php');
session_start();

$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$fecha = $_POST['fechapub'];


$libro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'], $_POST['fechapub']);

array_push($_SESSION['libro'], $libro);

header( "Location:http://localhost/app-php/biblioteca/listado.php" ); 

?>