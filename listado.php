<?php
    require 'libreria.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    
    <h1>Libros</h1>
    <button id="alta"><a href="altalibro.php">Alta libro</a></button>
    <br/>
    <br/>
    <table border="1" width='700px' style="text-align:center">
        <tr">
            <td>
                <p>ISBN</p>
            </td>
            <td>
                <p>Título</p>
            </td>
            <td>
                <p>Autor</p>
            </td>
            <td>
                <p>Fecha de publicación</p>
            </td>
            <td colspan='2'>
                <p>Operaciones</p>
            </td>
        </tr>
    
        <?php
            $libros = $_SESSION['libro'];

            foreach($libros as $list) {
                echo "<tr>";
                echo "<td>". $list->get_isbn() ."</td>";
                echo "<td>". $list->get_titulo() ."</td>";
                echo "<td>". $list->get_autor() ."</td>";
                echo "<td>". $list->get_fecha() ."</td>";
                $isbn = $list->get_isbn();
                echo "<td width='70px'>   
                            <form action='modificalibro.php' method='post'>
                                <input type='submit' value='Editar'/>
                                <input type='hidden' name='_isbn' value='$isbn'/>
                            </form>";
                echo "</td>";
                echo "<td width='70px'>
                            <form action='eliminalibro.php' method='post'>
                                <input type='hidden' name='_isbn' value='$isbn'>
                                <input type='submit' value='Eliminar'/>
                             </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>