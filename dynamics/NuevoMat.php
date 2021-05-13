<?php
echo '
    <form action="./NuevoMat.php" method="POST" align="center">
    <fieldset>
        <legend style="color:#00a2ff"><i><h2>Solicitar adquisición de material</h2></i></legend>
            <label for = "iduser">Usuario:
                <input type="number" name="iduser"required placeholder="No. Cuenta o RFC">
            </label><br><br><br>
            <i>Datos de la obra</i><br><hr>
            <label for="name">Nombre del libro:<br>
                <input type="text" name="name" required>
            </label><br><br>
            <label for="autor">Autor (principal):<br>
                <input type="text" name="autor"required>
            </label><br><br>
            <label for="editorial">Editorial:<br>
                <input type="text" name="editorial"required>
            </label><br><br>
            <label for ="año">Año de publicación:<br>
                <input type="number" name="año"required>
            </label><br><br>
            <label for = "genero">Géneros:<br>
                <input type="text" name="genero"required>
            </label><br><br>
            <label>Razones:<br>
                <textarea name="razones" rows="10" cols="50" placeholder="¿Por qué es significativa?"required></textarea>
            </label><br><br>
            <label for = "Enviar">
                <input type="submit" name="Solicitar" value="Solicitar">
            </label>
        </fieldset>    
    </form>';
    if(isset($_POST["Solicitar"]))
    {  
        header("location:./SesionActiva.php");
    }
?>