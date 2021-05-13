<?php
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
    }
?>