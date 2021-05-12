<?php
    session_start();
    /*if(isset ($_SESSION["sesionact"])){
        header("location: ./SesionActiva.php");
    }*/
    echo '<h1 text-aling="center">LA MAGIA DEL SABER</h1>';
    echo '<h1 text-aling="center">Sapere Aude</h1>';
    echo '<form action="" method="POST" aling="center">
            <legend style="color:darkturquoise"><h2><i>Iniciar sesión</i></h2></legend>
            <label for="correo">Correo: 
                <br>
                <input type="email" name="correo" required>
            </label><br><br>
            <label for="password">Contraseña: 
                <br>
                <input type="password" name="password"required >
            </label>
            <br><br>
            <input type="submit" value="Acceder" style="background-color:aquamarine">
    </form>
    <br>
    <hr>
    ¿No tienes una cuenta?
    <legend style="color:darkturquoise"><h2><i>¡¡Registrate!!</i></h2></legend>
    <form action="CrearUser.php" method="post">
        <input type="submit" name= "Crear" value="Crear Cuenta" style="background-color:aquamarine">
    </form>
    ';
?>