<?php
    define("DBUSER","root");
    define ("DBHOST", "localhost");
    define("PASSWORD", "");
    define("DB", "bibliotecaVirtual");

    function connectdb (){
        $conexion=mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        if(!$conexion){
            mysqli_connect_error();
            mysqli_connect_errno();
        }
        return $conexion;
    }
?>