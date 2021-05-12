<?php
echo 
'
    <form>
        <fieldset>
            <legend style="color:#00a2ff" ><i><h2>Reportar contenido inadecuado</h2></i></legend>
            <i>Consideras que la obra...</i><br><br>
                <label for="Cont18">¿Describe escenas de violencia que pueda dañar la sensibilidad del lector?
                    <br><input type="radio" name="Cont18" required>Si</label>
                    <input type="radio" name="Cont18" required>No</label><br><br>
                <label for = "Cont18">¿Describe escenas con contenido sexual explícito?
                    <br><input type="radio" name="Cont18" required>Si</label>
                    <input type="radio" name="Cont18" required>No</label><br><br>
                <label for="DiscOdio">¿Contiene un discuros de odio?
                    <br><input type="radio" name="DiscOdio" required>Si</label>
                    <input type="radio" name="DiscOdio" required>No</label><br><br>
                <label for="Difdesinf">¿Difunde la desinformación?
                    <br><input type="radio" name="Difdesinf" required>Si</label>
                    <input type="radio" name="Difdesinf" required>No</label><br><br>
                <label for ="AtentPers">¿Incita a acciones que atenten contra la integridad de una persona o grupo de ellas?
                    <br><input type="radio" name="AtentPers" required>Si</label>
                    <input type="radio" name="AtentPers" required>No</label><br><br>
                    <label for = "Aceptar">
                        <input type="submit" name="Aceptar" >
                    </label>
        </fieldset>    
    </form>

    <br><br><br><br>

    <form>
        <fieldset>
            <legend style="color:#00a2ff"><i><h2>Añadir o eliminar bibliotecarios</h2></i></legend>
                <i>¿Qué es lo que deseas hacer?</i><br><br>
                <select name="Modo">
                    <option value="ENP1">Añadir nuevos bibliotecarios</option>
                    <option value="ENP2">Eliminar viejos bibliotecarios</option>
                </select><br><br>
                <label for="correo">Correo: 
                    <input type="email" name="correo" required required placeholder="Correo UNAM">
                </label><br><br>
                <label for="nombre">Nombre completo: 
                    <input type="text" name="nombre"required>
                </label><br><br>
                <label for="birth">Fecha de nacimiento: 
                    <input type="date" name="brith"required>
                </label><br><br>
                <label for ="id">No. de cuenta o RFC:
                    <input type="number" name="id"required>
                </label><br><br>
                <label for = "genero">Contraseña: 
                    <input type="password" name="contraseña"required>
                </label><br><br>
                <label for = "Aceptar">
                    <input type="submit" name="Aceptar" >
                </label>
        </fieldset>    
    </form>

    <br><br><br><br>

    <form>
        <fieldset>
            <legend style="color:#00a2ff"><i><h2>Añadir o eliminar administradores</h2></i></legend>
                <i>¿Qué es lo que deseas hacer?</i><br><br>
                <select name="Modo">
                    <option value="ENP1">Añadir nuevos administradores</option>
                    <option value="ENP2">Eliminar viejos administradores</option>
                </select><br><br>
                <label for="correo">Correo: 
                    <input type="email" name="correo" required required placeholder="Correo UNAM">
                </label><br><br>
                <label for="nombre">Nombre completo: 
                    <input type="text" name="nombre"required>
                </label><br><br>
                <label for="birth">Fecha de nacimiento: 
                    <input type="date" name="brith"required>
                </label><br><br>
                <label for ="id">No. de cuenta o RFC:
                    <input type="number" name="id"required>
                </label><br><br>
                <label for = "genero">Contraseña: 
                    <input type="password" name="contraseña"required>
                </label><br><br>
                <label for = "Aceptar">
                    <input type="submit" name="Aceptar" >
                </label>
        </fieldset>    
    </form>
    <br><br>
';
?>
