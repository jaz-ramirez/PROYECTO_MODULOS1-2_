<?php
    echo "<h1>Bienvenido a la página del administrador de la Biblioteca</h1>";
    echo '<form>
        <legend style="color:#00a2ff" ><i><h2>Agregar nuevo material</h2></i></legend>
        <h4 aling="center">Datos del libro:</h4>
        <label for="name">Nombre del libro: 
            <input type="text" name="name" required>
        </label><br><br>
        <label for="autor">Autor (principal): 
            <input type="text" name="autor"required>
        </label><br><br>
        <label for="editorial">Editorial: 
            <input type="text" name="editorial"required>
        </label><br><br>
        <label for ="año">Año de publicación:
            <input type="number" name="año"required>
        </label><br><br>
        <label for = "genero">Género(s): 
            <input type="text" name="genero"required>
        </label><br><br>
        <label for = "area">Área: 
            <input type="text" name="area"required>
        </label><br><br>
        <label for = "area">Imagen: 
            <input type="file" name="img">
        </label><br><br>
        <label for = "area">Archivo: 
            <input type="file" name="book"required>
        </label><br><br>
        <label for = "Enviar" >
            <input type="submit" value="Enviar"  style="background-color:aquamarine">
        </label>
    </form>';


echo '<form action="" method="POST">
<fieldset>
    <legend style="color:darkturquoise"><h2><i>Añadir o eliminar lectores</i></h2></legend>
    <select name="accion">
        <option value="1">Añadir</option>
        <option value="0">Eliminar</option>
    </select>
    <hr>
    <label for="correo">Correo: 
        <input type="email" name="correo">
    </label>
    <br><br>
    <label for="name">Nombre completo: 
        <input type="text" name="name">
    </label>
    <br><br>
    <label for="fecha_nacim">Fecha de nacimiento: 
        <input type="date" name="fecha_nacim" min="1930-01-01">
    </label>
    <br><br>
    <label for="identificacion">RFC o número de cuenta: 
        <input type="text" name="identificacion" minlength="9" maxlength="15">
    </label>
    <br><br>
    <label for="contraseña">Contraseña: 
        <input type="password" name="contraseña">
    </label>
    <br><br>
    <input type="submit" value="Realizar" style="background-color:aquamarine">
    <input type="reset" value="Cancelar" style="background-color:aquamarine">
</fieldset>
</form>';

?>