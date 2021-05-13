<?php
    include("./Config.php");
    $conexion= connectdb();
    session_start();
    if(isset($_POST["Crear Usuario"]))
    {
        //Recibimos los datos del POST de
        $correo= ($_POST["correo"]);
        $nombre= ($_POST["nombre"]);
        $birth = ($_POST["birth"]);
        $id= ($_POST["id"]);
        $contra=($_POST["contraseña"]);

        //Añadir logica para añadir la informacion a la base de datos
        $SQL_SELECT = "INSERT INTO Usuario VALUES ('$id',1,'$nombre','$birth','$correo','$contra')";
        $SQL_Query = mysqli_query ($conexion, $SQL_SELECT);
        $SQL_Row = mysqli_fetch_array ($SQL_Query);
        var_dump ($SQL_Row);

        //header("location: ./SesionActiva.php");
    }
    echo '<h1 align="center">LA MAGIA DEL SABER</h1>';
    echo '<h1 align="center">Sapere Aude</h1>';
    echo '<form action="SesionActiva.php" method="POST" align="center">
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
    <h3 align="center">¿No tienes una cuenta?</h3>
    
    <legend style="color:darkturquoise"><h2 align="center"><i>¡¡Registrate!!</i></h2></legend>
    <form action="CrearUser.php" method="post" align="center">
        <input type="submit" name= "Crear" value="Crear Cuenta" style="background-color:aquamarine" align="center">
    </form>
    ';
    if(isset($_POST["Acceder"]))
    {  
        header("location: ./SesionActiva.php");
    }
?>