<?php

    session_start();

    $_SESSION['libro'] = array();
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
</body>
</html>

