<?php
    require 'socios.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado socios</title>
</head>
<body>
    
    <h1>Socios</h1>
    <button id="alta"><a href="altasocio.php">Alta socio</a></button>
    <button id="atras"><a href="index.php">Volver</a></button>
    <br/>
    <br/>
    <table border="1" width='700px' style="text-align:center">
        <tr>
            <td>
                <p>Nombre</p>
            </td>
            <td>
                <p>DNI</p>
            </td>
            <td>
                <p>Apellidos</p>
            </td>
            <td>
                <p>Teléfono</p>
            </td>
            <td>
                <p>Dirección</p>
            </td>
            <td colspan='2'>
                <p>Operaciones</p>
            </td>
        </tr>
    
        <?php
            $socios = $_SESSION['socio'];

            foreach($socios as $list) {
                echo "<tr>";
                echo "<td>". $list->get_nombre() ."</td>";
                echo "<td>". $list->get_dni() ."</td>";
                echo "<td>". $list->get_apellidos() ."</td>";
                echo "<td>". $list->get_telefono() ."</td>";
                echo "<td>". $list->get_direccion() ."</td>";
                $dni = $list->get_dni();
                echo "<td width='70px'>   
                            <form action='modificasocios.php' method='post'>
                                <input type='submit' value='Editar'/>
                                <input type='hidden' name='_dni' value='$dni'/>
                            </form>";
                echo "</td>";
                echo "<td width='70px'>
                            <form action='eliminasocio.php' method='post'>
                                <input type='hidden' name='_dni' value='$dni'>
                                <input type='submit' value='Eliminar'/>
                             </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>