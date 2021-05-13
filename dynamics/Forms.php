<?php
    echo'<form>
            <fieldset>
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
                    <input type="submit" name="Enviar" >
                </label>
            </fieldset>    
                
            </fieldset>
        </form>
    
        <br><br><br>
       
        
        echo "<br><br>";
?>