<?php
if($book!=0)
{
    $book= (isset($_POST ["book"])&& $_POST["book"] !="") ?$_POST["book"]: 0;
    $autor= (isset($_POST ["autor"])&& $_POST["autor"] !="") ?$_POST["autor"]: 0;
    $editorial= (isset($_POST ["editorial"])&& $_POST["editorial"] !="") ?$_POST["editorial"]: 0;
    $año= (isset($_POST ["año"])&& $_POST["año"] !="") ?$_POST["año"]: 0;
    $genero= (isset($_POST ["genero"])&& $_POST["genero"] !="") ?$_POST["genero"]: 0;
    $area= (isset($_POST ["area"])&& $_POST["area"] !="") ?$_POST["area"]: 0;
    $img= (isset($_POST ["img"])&& $_POST["img"] !="") ?$_POST["img"]: 0;
    

    $extension= pathinfo($nombrepdf, PATHINFO_EXTENSION);
    if($extension=="pdf")
    {
        if(file_exists($carpeta.$book.$extension==false))
        {
            rename($archpdf, $carpeta.$book.$extension);
            echo "<h1>El libro se cargó correctamente en la biblioteca</h1><br><br>";
            $guardalibro = "INSERT INTO libro (Titulo, Autor, Año) VALUES ('$book', '$autor', '$año')";
            $query=mysqli_query($conect, $addlector);
            if($query)
            {
                echo "Se insertó el libro correctamente";
            }
            else{
                echo "No se pudo insertar el libro correctamente";
            }

        }
        else
        {
            echo "Este libro ya existe en la biblioteca";
        }
    }
    echo "uno";

}


?>