<?php
    require('libro.php');
    session_start();
    $menu = $_SESSION['libro']; 


    echo "<h1>LISTADO DE LIBROS</h1>";
    echo "<table border='1'>
                <thead>
                    <th>ISBN</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Fecha Publicación </th>
                    <th colspan='2'>Operaciones</th>
                    <form action='altalibro.php' method='post'>
                        <input type='submit' value='Dar de alta'/>
                    </form>
                </thead>
                <tbody>
                    ";
                        foreach($menu as $lista){
                            echo "<tr>";
                            echo "<td>". $lista->getisbn() ."</td>";
                            echo "<td>". $lista->gettitulo() ."</td>";
                            <td>autor</td>
                            <td> </td>
                            <td>    
                                <form action='libro.php' method='post'>
                                        <input type='submit' value='Editar'/>
                                </form>
                            </td>
                            <td>
                                <form action='libro.php' method='post'>
                                    <input type='submit' value='Eliminar'/>
                                </form>
                            </td>
                        </tr>
                    
                </tbody>
            </table>"
            
?>