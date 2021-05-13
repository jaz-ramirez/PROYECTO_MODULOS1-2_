<?php
    if(isset ($_POST["Crear"]))
    {
        echo '<form action="logUser.php" method="post" align="center">
        <fieldset>
            <legend style="color:#00a2ff"><i><h2>Crea nuevo usuario</h2></i></legend>
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
                <label for = "Crear Usuario">
                    <input type="submit" name="Nuser" value= "Crear Usuario">
                </label>
            </fieldset>    
        </form>';
    }
?>
