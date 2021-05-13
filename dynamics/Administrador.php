<?php
    include("./Config.php");
    $conect= connectdb();
    $maslector= (isset($_POST ["maslector"])&& $_POST["maslector"] !="") ?$_POST["maslector"]: 0;
    $masbiblio= (isset($_POST ["masbiblio"])&& $_POST["masbiblio"] !="") ?$_POST["masbiblio"]: 0;
    $masadmin= (isset($_POST ["masadmin"])&& $_POST["masadmin"] !="") ?$_POST["masadmin"]: 0;
    $menoslector= (isset($_POST ["menoslector"])&& $_POST["menoslector"] !="") ?$_POST["menoslector"]: 0;
    $menosbiblio= (isset($_POST ["menosbiblio"])&& $_POST["menosbiblio"] !="") ?$_POST["menosbiblio"]: 0;
    $menosadmin= (isset($_POST ["menosadmin"])&& $_POST["menosadmin"] !="") ?$_POST["menosadmin"]: 0;


    $email= (isset($_POST ["correo"])&& $_POST["correo"] !="") ?$_POST["correo"]: 0;
    $name= (isset($_POST ["name"])&& $_POST["name"] !="") ?$_POST["name"]: 0;
    $birth= (isset($_POST ["birth"])&& $_POST["birth"] !="") ?$_POST["birth"]: 0;
    $password= (isset($_POST ["contraseña"])&& $_POST["contraseña"] !="") ?$_POST["contraseña"]: 0;
    $id= (isset($_POST ["id"])&& $_POST["id"] !="") ?$_POST["id"]: 0;

    $book= (isset($_POST ["book"])&& $_POST["book"] !="") ?$_POST["book"]: 0;
    $autor= (isset($_POST ["autor"])&& $_POST["autor"] !="") ?$_POST["autor"]: 0;
    $editorial= (isset($_POST ["editorial"])&& $_POST["editorial"] !="") ?$_POST["editorial"]: 0;
    $año= (isset($_POST ["año"])&& $_POST["año"] !="") ?$_POST["año"]: 0;
    $genero= (isset($_POST ["genero"])&& $_POST["genero"] !="") ?$_POST["genero"]: 0;
    $area= (isset($_POST ["area"])&& $_POST["area"] !="") ?$_POST["area"]: 0;
    $img= (isset($_POST ["img"])&& $_POST["img"] !="") ?$_POST["img"]: 0;
    

   
    $correounam = explode ("@", $email);
    
    
    $carpetabiblio= "../statics/";
    if($book!=0)
    {
        $nombrepdf= $_FILES['file']['name'];
        $archpdf = $_FILES ['file']['tmp_name'];
    
        $extension= pathinfo($nombrepdf, PATHINFO_EXTENSION);
        if($extension=="pdf")
        {
            if(file_exists($carpeta.$book.$extension==false))
            {
                rename($archpdf, $carpeta.$book.$extension);
                echo "<h1>El libro se cargó correctamente en la biblioteca</h1><br><br>";
                
                $guardalibro = "INSERT INTO libro (Titulo, Autor, Año) VALUES ('$book', '$autor', '$año')";
                $query=mysqli_query($conect, $guardalibro);
                if($query)
                {
                    echo "Se insertó el libro correctamente";
                }
                else{
                    echo "No se pudo insertar el libro correctamente";
                }

            }
            else
            {
                echo "Este libro ya existe en la biblioteca";
            }
    }
    echo "uno";

    }
    else if ($maslector!==0)
    {
        if($correounam[1]=="comunidad.unam.mx"||$correounam[1]=="alumno.enp.unam.mx"||$correounam[1]=="enp.unam.mx")
        {
            $addlector="INSERT INTO usuario (id_usuario, id_tipo, Nombre_completo, Fecha_nacimiento, Correo, Contraseña) 
                                VALUES ('$id',1, '$name', '$birth', '$email', '$password')";
            $query=mysqli_query($conect, $addlector);
            if($query)
            {
                echo "Se ha registrado correctamente";
            }
            else{
                echo "No se pudo registrar correctamente";
            }
             
        }
        else
        {
            echo "<h1>Correo electrónico inválido</h1>";
        }
        echo "<br>dos"; 
    }
    else if ($masbiblio!==0)
    {
        if($correounam[1]=="comunidad.unam.mx"||$correounam[1]=="alumno.enp.unam.mx"||$correounam[1]=="enp.unam.mx")
        {
            $addbiblio="INSERT INTO usuario (id_usuario, id_tipo, Nombre_completo, Fecha_nacimiento, Correo, Contraseña) VALUES ('$id',2, '$name', '$birth', '$email', '$password')";
            $query=mysqli_query($conect, $addbiblio);
            if($query)
            {
                echo "Se ha registrado correctamente";
            }
            else{
                echo "No se pudo registrar correctamente";
            }
        }
        else
        {
            echo "<h1>Correo electrónico inválido</h1>";
        }
        echo "tres";
    }
    else if ($masadmin!==0)
    {
        if($correounam[1]=="comunidad.unam.mx"||$correounam[1]=="alumno.enp.unam.mx"||$correounam[1]=="enp.unam.mx")
        {
            $addadmin="INSERT INTO usuario (id_usuario, id_tipo, Nombre_completo, Fecha_nacimiento, Correo, Contraseña) VALUES ('$id',3, '$name', '$birth', '$email', '$password')";
            $query=mysqli_query($conect, $addadmin);
            if($query)
            {
                echo "Se ha registrado correctamente";
            }
            else{
                echo "No se pudo registrar correctamente";
            }
        }
        else
        {
            echo "<h1>Correo electrónico inválido</h1>";
        }
        echo "cuatro";
    }
    else if ($menoslector!==0)
    {
        $quitalector="DELETE FROM usuario WHERE id_usuario=$id AND id_tipo=1";
        $query=mysqli_query($conect, $quitalector);
        if($query)
        {
            echo "Se pudo eliminar correctamente";
        }
        else{
            echo "No se pudo eliminar";
        }
    
    }
    else if ($menosbiblio!==0)
    {
        $quitabiblio="DELETE FROM usuario WHERE id_usuario=$id AND id_tipo=2";
        $query=mysqli_query($conect, $quitabiblio);
        if($query)
        {
            echo "Se pudo eliminar correctamente";
        }
        else{
            echo "No se pudo eliminar";
        }
    
    }
    else if ($menosadmin!==0)
    {
        $quitadmin= "DELETE FROM usuario WHERE id_usuario=$id AND id_tipo=3";
        $query=mysqli_query($conect, $quitadmin);
        if($query)
        {
            echo "Se pudo eliminar correctamente";
        }
        else{
            echo "No se pudo eliminar";
        }
    
    }
    else{
        echo "no entró a ninguna";
    }
   





?>