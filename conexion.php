<?php 
    function conectar(){

    $host = "localhost";
    $user = "root";
    $pass = "";

    $database = "pharmalife";

    $conexion = mysqli_connect($host,$user,$pass);
    mysqli_select_db($conexion,$database);

    return $conexion;

    } 
    
?>