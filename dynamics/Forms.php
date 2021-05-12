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
       
        <form>
            <fieldset>
                <legend style="color:#00a2ff"><i><h2>Solicitar adquisición de material</h2></i></legend><br>
                    <label for = "iduser">Usuario
                        <input type="number" name="iduser"required placeholder="Introduzca su ID">
                    </label><br>
                    <i>Datos de la obra</i><br>
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
                    <label for = "genero">Géneros: 
                        <input type="text" name="genero"required>
                    </label><br><br>
                    <label for = "razones">Razones:
                        <input type="text" name="razones"required placeholder="¿Por qué la obra es significativa para la biblioteca?">
                    </label><br><br>
                    <label for = "Enviar">
                        <input type="submit" name="Enviar" >
                    </label>
                </fieldset>    
            
        </form>';
        echo "<br><br>";

        echo '<form>
        <fieldset>
            <legend style="color:#00a2ff"><i><h2>Crea nuevo usuario</h2></i></legend><br>
                <label for = "correo">Correo:
                    <input type="email" name="correo"required placeholder="Correo UNAM">
                </label><br><br>
                <label for="nombre">Nombre completo: 
                    <input type="text" name="nombre" required>
                </label><br><br>
                <label for="birth">Fecha de nacimiento: 
                    <input type="date" name="birth"required>
                </label><br><br>
                <label for="id">No. de cuenta o RFC: 
                    <input type="number" name="id"required>
                </label><br><br>
                <label for = "contraseña">Contraseña
                    <input type="password" name="contraseña"required >
                </label><br><br>
                <label for = "Crear">
                    <input type="submit" name="Crear" >
                </label>
            </fieldset>    
        
    </form>';

?>