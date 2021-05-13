<?php
    include("./Config.php");
    $conexion= connectdb();
    session_start();
    $password = ($_POST["password"]);
    $correo = ($_POST["correo"]);
    //Logica para comparar con la base de datos
    $SQL_SELECT = "SELECT contraseña FROM usuario WHERE Contraseña='$password' AND Correo='$correo'";
    $SQL_Query = mysqli_query ($conexion, $SQL_SELECT);
    $SQL_Row = mysqli_fetch_array ($SQL_Query);
    if (!empty($SQL_Row))
    {
        echo "<h1 align=\"center\">¡¡Bienvenido a la biblioteca de la ENP 6!!</h1>";
        echo '<table align="center">
                <tbody>
                    <td><video src="../diseño/Biblioteca.mp4" controls Loop width="600" align="center"></td>
                </tbody>
                <tr>
                <h4 align=\'center\'>Bienvenido a <i>La magia del Saber</i> la biblioteca de la ENP 6. <br>
                Al crear tu cuenta podrás buscar libros a través de su área, su año, su editorial y de su autor.<br>
                Podrás descargar los libros que sean de tu agrado y también podrás agregarlos a tu lista de favoritos.<br>
                Si quieres saber algo más sobre un libro podrás consultar su descripción detallada, así como poder ver su portada. 
                <br><i>Sapere Aude</i></h4>
                </tr>
             </table>';
        echo '<form action="./resultadosbusqueda.php" method="POST" align="center">
                <legend style="color:darkturquoise"><h2><i>Búsqueda</i></h2></legend>
                <label for="texto">Buscar (ID o Titulo): 
                    <br>
                    <input type="text" name="texto" style="width: 488px">
                </label><br><br>
                Categorias de busqueda: 
                <table align="center">
                    <thead>
                        <tr>
                            <th>Área</th>
                            <th>Año</th>
                            <th>Editorial</th>
                            <th>Autor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="area">
                                    <option value="0">Escoge(opcional)</option>
                                    <option value="1">Área 1</option>
                                    <option value="2">Área 2</option>
                                    <option value="3">Área 3</option>
                                    <option value="4">Área 4</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" name="año" style="width: 60px">
                            </td>
                            <td>
                                <input type="text" name="editorial" style="width: 100px">
                            </td>
                            <td>
                                <input type="text" name="autor">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <input type="submit" name= "Buscar" value="Buscar" style="background-color:aquamarine">
                <input type="reset" value="Cancelar" style="background-color:aquamarine">
                </form>
                
                <h3 align=\'center\'>¿No está el libro que quieres?</h3>
                <form action="./NuevoMat.php" method="POST" align="center">
                    <input type="submit" name= "NuevoMat" value="Solicitar Nuevo Material" style="background-color:aquamarine">
                </form>
                ';
    }
    else
    {
        header("location: ./InicioSesion.php");
    }
?>
