<body>
    <table border ='1'>

            <?php
                require('libro.php');
                session_start();
                $menu = $_SESSION['libro']; 

                foreach($menu as $lista){
                                        echo "<tr>";
                                        echo "<td>". $lista->getisbn() ."</td>";
                                        echo "<td>". $lista->gettitulo() ."</td>";
                                        echo "<td>". $lista->getautor() ."</td>";
                                        echo "<td>". $lista->getfecha() ."</td>";
                                        echo "<td>    
                                            <form action='libro.php' method='post'>
                                                    <input type='submit' value='Editar'/>
                                            </form>
                                        </td>
                                        <td>
                                            <form action='libro.php' method='post'>
                                                <input type='submit' value='Eliminar'/>
                                            </form>
                                        </td>
                                    </tr>"
                        
            ?>
    </table>
</body>