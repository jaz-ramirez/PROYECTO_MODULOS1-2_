<?php
    include("./Config.php");
//======================================================================================//
    $texto = (isset($_POST["texto"]) && $_POST["texto"] != "" )?$_POST["texto"] : "No hay texto";
    $area = (isset($_POST["area"]) && $_POST["area"] != "" )?$_POST["area"] : 0;
    $año = (isset($_POST["año"]) && $_POST["año"] != "" )?$_POST["año"] : "No hay año";
    $editorial = (isset($_POST["editorial"]) && $_POST["editorial"] != "" )?$_POST["editorial"] : "No hay editorial";
    $autor = (isset($_POST["autor"]) && $_POST["autor"] != "" )?$_POST["autor"] : "No hay autor";
//======================================================================================//
    //se conecta con la base de datos
    $con=connectdb();
    //verifica si se envio algo desde el texto de la barra de busqueda
    if($texto!="No hay texto")
    {
        //si hay algo imprime el texto como valor de busqueda
        echo "Texto de busqueda: ".$texto;
        echo "<br><br>";
        //si se trata de numeros buscara el ID del libro
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
                echo       "</td>
                        </tr>
                </table>";
            }
            echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
            echo'
            <form action="./datos.php" method="POST">
                <p>Para consultar más datos escribe el ID del libro: </p>';
                echo '<input type="number" name="ID" required><br><br>';
                echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
            </form>';
        }
        //si no se trata de numeros buscara titulo
        else{
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
                echo       "</td>
                        </tr>
                </table>";
            }
        }
        //en un hidden envia el ID para encontrar la informacion de más información
        echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
        echo'
        <form action="./datos.php" method="POST">
            <p>Para consultar más datos escribe el ID del libro: </p>';
            echo '<input type="number" name="ID" required><br><br>';
            echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
        </form>';
    }
    //si el area es mayor o igual a uno iniciara una nueva busqueda por area, existen casos por area 1-4
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
                echo       "</td>
                        </tr>
                </table>";
            }
            echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
            echo'
            <form action="./datos.php" method="POST">
                <p>Para consultar más datos escribe el ID del libro: </p>';
                echo '<input type="number" name="ID" required><br><br>';
                echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
            </form>';
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
                echo       "</td>
                        </tr>
                </table>";
            }
            echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
            echo'
            <form action="./datos.php" method="POST">
                <p>Para consultar más datos escribe el ID del libro: </p>';
                echo '<input type="number" name="ID" required><br><br>';
                echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
            </form>';
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
                echo       "</td>
                        </tr>
                </table>";
            }
            echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
            echo'
            <form action="./datos.php" method="POST">
                <p>Para consultar más datos escribe el ID del libro: </p>';
                echo '<input type="number" name="ID" required><br><br>';
                echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
            </form>';
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
                echo       "</td>
                        </tr>
                </table>";
            }
        }
        echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
        echo'
        <form action="./datos.php" method="POST">
            <p>Para consultar más datos escribe el ID del libro: </p>';
            echo '<input type="number" name="ID" required><br><br>';
            echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
        </form>';
    }
    //si encuentra datos enviado en año iniciara una nueva busqueda por año
    if($año!="No hay año")
    {
        echo "<h2>Año de busqueda: </h2>".$año;
        echo "<br><br>";
        //con este ciclo voy incrementando el año hasta llegar a 3000 y checo si existe ese año o no para imprimir la informacion básica del libro
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
                    echo       "</td>
                            </tr>
                    </table>";
                }
            }
            $año_maximo+=1;
        }
        echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
        echo'
        <form action="./datos.php" method="POST">
            <p>Para consultar más datos escribe el ID del libro: </p>';
            echo '<input type="number" name="ID" required><br><br>';
            echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
        </form>';
    }
    //checo si hay editorial para crear nueva busqueda por editorial
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
            echo       "</td>
                    </tr>
            </table>";
        }
        echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
        echo'
        <form action="./datos.php" method="POST">
            <p>Para consultar más datos escribe el ID del libro: </p>';
            echo '<input type="number" name="ID" required><br><br>';
            echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
        </form>';
    }
    //checo si hay autor para crear una nueva busqueda por autor
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
            echo       "</td>
                    </tr>
            </table>";
        }
        echo "<h2><i> ¿Te interesó algún libro? </i></h2>";
        echo'
        <form action="./datos.php" method="POST">
            <p>Para consultar más datos escribe el ID del libro: </p>';
            echo '<input type="number" name="ID" required><br><br>';
            echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
        </form>';
    }
    echo "<h4 align='center'>¿Consideras que hay obras inadecuadas?</h4>";
    echo '
    <form action="ReporMat.php" method="post" align="center">
        <input type="submit" name= "Reportar" value="Reportar Material" style="background-color:aquamarine" align="center">
    </form>
    ';
    
    //si no se envia informacion se imprime el siguiente mensaje
    if($texto=="No hay texto"&&$año=="No hay año"&&$editorial=="No hay editorial"&&$autor=="No hay autor"&&$area==0)
    {
        echo "<h2>No hay resultados de busqueda</h2>";
    }
?>