<?php
    include("./Config.php");
    $con=connectdb();
    //======================================================================================//
    $Abrir = (isset($_POST["Abrir"]) && $_POST["Abrir"] != "" )?$_POST["Abrir"] : "a";
    $Descargar = (isset($_POST["Descargar"]) && $_POST["Descargar"] != "" )?$_POST["Descargar"] : "a";
    $Titulo = (isset($_POST["Titulo"]) && $_POST["Titulo"] != "" )?$_POST["Titulo"] : "a";
    $ID = (isset($_POST["ID"]) && $_POST["ID"] != "" )?$_POST["ID"] : "a";
    $Agregar = (isset($_POST["Agregar"]) && $_POST["Agregar"] != "" )?$_POST["Agregar"] : "a";
    //======================================================================================//
    if($Abrir!="a")
    {
        echo '<table align="center">
            <tr align="center">
                <td>';
                    echo "<h2>Para continuar sigue las instrucciones:</h2><br><br>";
                    echo "Por favor, para abrir dale al link<br><br>";
                    //si existe el titulo y el id imprime un vinculo que nos lleva a otra pagina donde podemos ver el libro
                    if($Titulo!="a")
                    {
                        if($ID!="a")
                        {
                            $ID.=".pdf";
                            $Titulo.=".pdf";
                            echo "<a href='../statics/$ID' target='_blank'>Abrir</a>";
                        }
                    }
        echo "  </td>
            </tr>
        </table>";
    }
    if($Descargar!="a")
    {
        echo '<table align="center">
            <tr align="center">
                <td>';
                    echo "<h2>Para continuar sigue las instrucciones:</h2><br><br>";
                    echo "Por favor, para descargar dale al link<br><br>";
                    //si existe el titulo y el id imprime un vinculo que nos imprime un link para descargar el libro
                    if($Titulo!="a")
                    {
                        if($ID!="a")
                        {
                            $ID.=".pdf";
                            $Titulo.=".pdf";
                            echo "<a download='$Titulo' href='../statics/$ID'>Descargar</a>";
                        }
                    }
        echo "  </td>
            </tr>
        </table>";
    }
    if($Agregar!="a")
    {
        echo "Añade a Favs<br>No disponible aún";
        /*$añade=("INSERT INTO LibroHasUsuario(id_libro,id_usuario) VALUES($ID, *id_usuario*");
        echo $añade;
        $query=mysqli_query($con,"SELECT * FROM LibroHasCategoria
            INNER JOIN Libro ON Libro.id_libro=LibroHasCategoria.id_libro
            INNER JOIN Categoria ON Categoria.id_categoria=LibroHasCategoria.id_categoria
            INNER JOIN Area On Area.id_area=Categoria.id_area
            INNER JOIN Genero On Genero.id_genero=Categoria.id_genero
            INNER JOIN Editorial On Editorial.id_editorial=Libro.id_editorial
            INNER JOIN LibroHasUsuario On LibroHasUsuario.id_libro=Libro.id_libro
            WHERE LibroHasUsuario.id_usuario IN(*id_usuario*)");
        while($row=mysqli_fetch_array($query))
        {
            echo "<table>
                    <tr>
                        <td>";
                            echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="100px">';
                            echo '<ul>';
                                echo "<li>Titulo: ".$row["Titulo"];
                                echo "</li>";
                                echo "<li>ID: ".$row["id_libro"];
                                echo "</li>";
                            echo '</ul>';
            echo       "</td>
                    </tr>
            </table>";
            echo'
            <form action="./datos.php" method="POST">
                <p>Para consultar más datos escribe el ID del libro: </p>';
                echo '<input type="number" name="ID" required><br><br>';
                echo '<input type="submit" value="Mas información" style="background-color:aquamarine">
            </form><br><br>';
            echo '<form action="./archs_pdf.php" method="POST">';
                echo "<input type='hidden' name='Titulo' value='$row[6]'>";
                echo "<input type='hidden' name='ID' value='$row[1]'>";
                echo '<input type="submit" name="Eliminar" value="Eliminar de favoritos" style="background-color:aquamarine">
            </form>';
        }*/
    }
?>