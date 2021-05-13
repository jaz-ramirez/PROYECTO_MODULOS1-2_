<?php
    include("./Config.php");
    $conect= connectdb();
    if(isset($_POST["Regresar"]))
    {
        header("location: ./SesionActiva.php");
    }
    if(isset($_POST["nombre"]))
    {
        //Recibimos los datos del POST de
        $email= ($_POST["correo"]);
        $name= ($_POST["nombre"]);
        $birth = ($_POST["birth"]);
        $id= ($_POST["id"]);
        $password=($_POST["contraseña"]);

        //Añadir logica para añadir la informacion a la base de datos
        $correounam = explode ("@", $email);
        if($correounam[1]=="comunidad.unam.mx"||$correounam[1]=="alumno.enp.unam.mx"||$correounam[1]=="enp.unam.mx")
        {
            $addlector="INSERT INTO usuario (id_usuario, id_tipo, Nombre_completo, Fecha_nacimiento, Correo, Contraseña) 
                                VALUES ('$id',1, '$name', '$birth', '$email', '$password')";
            $query=mysqli_query($conect, $addlector);
            if($query)
            {
                echo "Se ha registrado correctamente";
            }
            else
            {
                echo "No se pudo registrar correctamente";
            } 
        }
        else 
        {
            echo"Tu correo debe de ser comunidad.unam.mx, alumno.enp.unam.mx o enp.unam.mx";
        }
        echo 
        '
        <form action="logUser.php" method="post" align="center">
            <input type="submit" name= "Regresar" value="Regresar" style="background-color:aquamarine" align="center">
        </form>
        ';
    }

?>