<?php
    include('libro.php');
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
                        foreach($menu as $libro){
                            echo "<tr>";
                            echo "<td>". $libro->getisbn() ."</td>";
                            echo "<td>". $libro->gettitulo() ."</td>";
                            echo "<td>". $libro->getautor() ."</td>";
                            echo "<td>". $libro->getfecha() ."</td>";
                            echo "<td>    
                                    <form action='libro.php' method='post'>
                                            <input type='submit' value='Editar'/>
                                    </form>
                                </td>";
                            echo "<td>
                                    <form action='libro.php' method='post'>
                                        <input type='submit' value='Eliminar'/>
                                    </form>
                                </td>";
                        echo "</tr>";
                        }
                echo "</tbody>
            </table>";
            
?>