<?php
    include("./Config.php");
//======================================================================================//
    $texto = (isset($_POST["texto"]) && $_POST["texto"] != "" )?$_POST["texto"] : "No hay texto";
    $area = (isset($_POST["area"]) && $_POST["area"] != "" )?$_POST["area"] : 0;
    $año = (isset($_POST["año"]) && $_POST["año"] != "" )?$_POST["año"] : "No hay año";
    $editorial = (isset($_POST["editorial"]) && $_POST["editorial"] != "" )?$_POST["editorial"] : "No hay editorial";
    $autor = (isset($_POST["autor"]) && $_POST["autor"] != "" )?$_POST["autor"] : "No hay autor";
//======================================================================================//
    $con=connectdb();
    //$libro="SELECT * FROM Libro WHERE Titulo='La casa hechizada'";
    /*$libro="SELECT * FROM Libro";
    $query=mysqli_query($con,$libro);
    while($row=mysqli_fetch_array($query))
    {
        echo "<table>
                <tr>
                    <td>";
                        echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                        echo '<ul>';
                            echo "<li>Titulo: ".$row[3];
                            echo "</li>";
                            echo "<li>ID: ".$row[0];
                            echo "</li>";
                        echo '</ul>';
        echo       "</td>
                </tr>
        </table>";
    }*/
    if($texto!="No hay texto")
    {
        echo "Texto de busqueda: ".$texto;
        echo "<br><br>";
        if($texto>=1)
        {
            $query=mysqli_query($con,"SELECT * FROM Libro WHERE id_libro LIKE '%$texto%'");
            while($row=mysqli_fetch_array($query))
            {
                echo "<table>
                        <tr>
                            <td>";
                                echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                echo '<ul>';
                                    echo "<li>Titulo: ".$row[3];
                                    echo "</li>";
                                    echo "<li>ID: ".$row[0];
                                    echo "</li>";
                                echo '</ul>';
                                echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
                echo       "</td>
                        </tr>
                </table>";
            }
        }else{
            $query=mysqli_query($con,"SELECT * FROM Libro WHERE Titulo LIKE '%$texto%'");
            while($row=mysqli_fetch_array($query))
            {
                echo "<table>
                        <tr>
                            <td>";
                                echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                echo '<ul>';
                                    echo "<li>Titulo: ".$row[3];
                                    echo "</li>";
                                    echo "<li>ID: ".$row[0];
                                    echo "</li>";
                                echo '</ul>';
                                echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
                echo       "</td>
                        </tr>
                </table>";
            }
        }
    }
    if($area>=1)
    {
        echo "<h2>Area de busqueda: </h2>".$area;
        echo "<br><br>";
        if($area==1)
        {
            $libro="SELECT * FROM LibroHasCategoria 
                INNER JOIN Libro ON Libro.id_libro=LibroHasCategoria.id_libro
                INNER JOIN Categoria ON LibroHasCategoria.id_categoria=Categoria.id_categoria
                WHERE id_area IN(1)";
            $query=mysqli_query($con,$libro);
            while($row=mysqli_fetch_array($query))
            {
                echo "<table>
                        <tr>
                            <td>";
                                echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                echo '<ul>';
                                    echo "<li>Titulo: ".$row[6];
                                    echo "</li>";
                                    echo "<li>ID: ".$row[1];
                                    echo "</li>";
                                echo '</ul>';
                                echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
                echo       "</td>
                        </tr>
                </table>";
            }
        }
        if($area==2)
        {
            $libro="SELECT * FROM LibroHasCategoria 
                INNER JOIN Libro ON Libro.id_libro=LibroHasCategoria.id_libro
                INNER JOIN Categoria ON LibroHasCategoria.id_categoria=Categoria.id_categoria
                WHERE id_area IN(2)";
            $query=mysqli_query($con,$libro);
            while($row=mysqli_fetch_array($query))
            {
                echo "<table>
                        <tr>
                            <td>";
                                echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                echo '<ul>';
                                    echo "<li>Titulo: ".$row[6];
                                    echo "</li>";
                                    echo "<li>ID: ".$row[1];
                                    echo "</li>";
                                echo '</ul>';
                                echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
                echo       "</td>
                        </tr>
                </table>";
            }
        }
        if($area==3)
        {
            $libro="SELECT * FROM LibroHasCategoria 
                INNER JOIN Libro ON Libro.id_libro=LibroHasCategoria.id_libro
                INNER JOIN Categoria ON LibroHasCategoria.id_categoria=Categoria.id_categoria
                WHERE id_area IN(3)";
            $query=mysqli_query($con,$libro);
            while($row=mysqli_fetch_array($query))
            {
                echo "<table>
                        <tr>
                            <td>";
                                echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                echo '<ul>';
                                    echo "<li>Titulo: ".$row[6];
                                    echo "</li>";
                                    echo "<li>ID: ".$row[1];
                                    echo "</li>";
                                echo '</ul>';
                                echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
                echo       "</td>
                        </tr>
                </table>";
            }
        }
        if($area==4)
        {
            $libro="SELECT * FROM LibroHasCategoria 
                INNER JOIN Libro ON Libro.id_libro=LibroHasCategoria.id_libro
                INNER JOIN Categoria ON LibroHasCategoria.id_categoria=Categoria.id_categoria
                WHERE id_area IN(4)";
            $query=mysqli_query($con,$libro);
            while($row=mysqli_fetch_array($query))
            {
                echo "<table>
                        <tr>
                            <td>";
                                echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                echo '<ul>';
                                    echo "<li>Titulo: ".$row[6];
                                    echo "</li>";
                                    echo "<li>ID: ".$row[1];
                                    echo "</li>";
                                echo '</ul>';
                                echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
                echo       "</td>
                        </tr>
                </table>";
            }
        }
    }
    if($año!="No hay año")
    {
        echo "<h2>Año de busqueda: </h2>".$año;
        echo "<br><br>";
        $año_maximo=0000;
        while($año_maximo<=3000)
        {
            if($año_maximo==$año)
            {
                $libro="SELECT * FROM Libro
                    WHERE Año IN($año)";
                $query=mysqli_query($con,$libro);
                while($row=mysqli_fetch_array($query))
                {
                    echo "<table>
                            <tr>
                                <td>";
                                    echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                                    echo '<ul>';
                                        echo "<li>Titulo: ".$row[3];
                                        echo "</li>";
                                        echo "<li>ID: ".$row[0];
                                        echo "</li>";
                                    echo '</ul>';
                                    echo'
                                        <br>
                                        <form action="./SesionActiva.php" method="POST">
                                            <input type="submit" value="Mas información" style="background-color:aquamarine">
                                        </form>';
                    echo       "</td>
                            </tr>
                    </table>";
                }
            }
            $año_maximo+=1;
        }
    }
    if($editorial!="No hay editorial")
    {
        echo "Editorial de busqueda: ".$editorial;
        echo "<br><br>";
        $libro="SELECT * FROM Libro 
                INNER JOIN Editorial ON Libro.id_editorial=Editorial.id_editorial
                WHERE Editorial LIKE '%$editorial%'";
        $query=mysqli_query($con,$libro);
        while($row=mysqli_fetch_array($query))
        {
            echo "<table>
                    <tr>
                        <td>";
                            echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                            echo '<ul>';
                                echo "<li>Titulo: ".$row[3];
                                echo "</li>";
                                echo "<li>ID: ".$row[0];
                                echo "</li>";
                            echo '</ul>';
                            echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
            echo       "</td>
                    </tr>
            </table>";
        }
    }
    if($autor!="No hay autor")
    {
        echo "<h2>Autor de busqueda: </h2>".$autor;
        echo "<br><br>";
        $query=mysqli_query($con,"SELECT * FROM Libro WHERE Autor LIKE '%$autor%'");
        while($row=mysqli_fetch_array($query))
        {
            echo "<table>
                    <tr>
                        <td>";
                            echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                            echo '<ul>';
                                echo "<li>Titulo: ".$row[3];
                                echo "</li>";
                                echo "<li>ID: ".$row[0];
                                echo "</li>";
                            echo '</ul>';
                            echo'
                                <br>
                                <form action="./SesionActiva.php" method="POST">
                                    <input type="submit" value="Mas información" style="background-color:aquamarine">
                                </form>';
            echo       "</td>
                    </tr>
            </table>";
        }
    }
    if($texto=="No hay texto"&&$año=="No hay año"&&$editorial=="No hay editorial"&&$autor=="No hay autor"&&$area==0)
    {
        echo "<h2>No hay resultados de busqueda</h2>";
    }
    /*echo'
    <br>
    <form action="./SesionActiva.php" method="POST">
        <input type="submit" value="Regresar" style="background-color:aquamarine">
    </form>';*/
?>