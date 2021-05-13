<?php
    include("./Config.php");
    $con=connectdb();
    //================================================================================================//
    $ID = (isset($_POST["ID"]) && $_POST["ID"] != "" )?$_POST["ID"] : "No hay dato";
    //================================================================================================//
    echo '<img src="https://img.icons8.com/ios/452/book.png" alt="Default libro" width="400px" align="right"><br>';
    $query=mysqli_query($con,"SELECT * FROM LibroHasCategoria
        INNER JOIN Libro ON Libro.id_libro=LibroHasCategoria.id_libro
        INNER JOIN Categoria ON Categoria.id_categoria=LibroHasCategoria.id_categoria
        INNER JOIN Area On Area.id_area=Categoria.id_area
        INNER JOIN Genero On Genero.id_genero=Categoria.id_genero
        INNER JOIN Editorial On Editorial.id_editorial=Libro.id_editorial
        WHERE Libro.id_libro IN($ID)
    ");
    while($row=mysqli_fetch_array($query))
    {
        //var_dump($row);
        echo "<h1><i>";
            echo $row["Titulo"];
        echo "</i></h1>";
        echo "<h4><i>";
            echo "ID del libro: ".$row["id_libro"];
        echo "</i></h4>";
        echo "<h2><i>";
            echo $row["Autor"];
        echo "</i></h2>";
        echo "<h3>";
            echo $row["Área"];
        echo "</h3>";
        echo "<h3>";
            echo "Género: ".$row["Género"];
        echo "</h3>";
        echo "<h3>";
            echo "Año de publicación: ".$row["Año"];
        echo "</h3>";
        echo "<h3>";
            echo "Editorial: ".$row["Editorial"];
        echo "</h3>";
        echo "<h3>";
            echo "Descripción: ";
        echo "</h3>";
        echo "<p>";
            echo $row["Descripcion"];
        echo "</p>";
        echo'
        <form action="" method="">
            <input type="submit" value="Abrir en otra pestaña" style="background-color:aquamarine">
            <input type="submit" value="Descargar" style="background-color:aquamarine">
            <input type="submit" value="Agregar a favoritos" style="background-color:aquamarine">
        </form>';
    }
?>