<?php
    include("./Config.php");
    $conbase= connectdb();
    $email= (isset($_POST ["correo"])&& $_POST["correo"] !="") ?$_POST["correo"]: 0;
    $password= (isset($_POST ["password"])&& $_POST["password"] !="") ?$_POST["password"]: 0;

    echo "<h1 align=\"center\">¡¡¡Bienvenido a la biblioteca de la ENP 6!!!</h1>";
    echo '<table align="center">
            <tbody>
                <td><video src="../diseño/Biblioteca.mp4" controls Loop width="600" align="center"></td>
            </tbody>
    </table>';
    

    echo '<form action="" method="POST" align="center">
   
        <legend style="color:darkturquoise"><h2><i>Búsqueda</i></h2></legend>
        <label for="texto">Buscar: 
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
        <input type="submit" value="Buscar" style="background-color:aquamarine">
        <input type="reset" value="Cancelar" style="background-color:aquamarine">
</form>';


   

?>