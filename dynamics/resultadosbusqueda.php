<?php
//======================================================================================//
    $texto = (isset($_POST["texto"]) && $_POST["texto"] != "" )?$_POST["texto"] : "No hay texto";
    $area = (isset($_POST["area"]) && $_POST["area"] != "" )?$_POST["area"] : 0;
    $año = (isset($_POST["año"]) && $_POST["año"] != "" )?$_POST["año"] : "No hay año";
    $editorial = (isset($_POST["editorial"]) && $_POST["editorial"] != "" )?$_POST["editorial"] : "No hay editorial";
    $autor = (isset($_POST["autor"]) && $_POST["autor"] != "" )?$_POST["autor"] : "No hay autor";
//======================================================================================//
    if($texto!="No hay texto")
    {
        echo "Texto de busqueda: ".$texto;
        echo "<br><br>";
        
    }
    if($area>=1)
    {
        echo "Año de busqueda: ".$area;
        echo "<br><br>";
    }
    if($año!="No hay año")
    {
        echo "Año de busqueda: ".$año;
        echo "<br><br>";
    }
    if($editorial!="No hay editorial")
    {
        echo "Editorial de busqueda: ".$editorial;
        echo "<br><br>";
    }
    if($autor!="No hay autor")
    {
        echo "Autor de busqueda: ".$autor;
        echo "<br><br>";
    }
    if($texto=="No hay texto"&&$año=="No hay año"&&$editorial=="No hay editorial"&&$autor=="No hay autor"&&$area==0)
    {
        echo "No hay resultados de busqueda";
    }
?>