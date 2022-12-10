<?php 

    include("conexion.php");
    $con = conectar();
    $id = $_POST['ID'];
    $nombre = $_POST['Nombre'];
    $correo = $_POST['email'];
    $empresa = $_POST ['Empresa'];
    $contra = $_POST ['password'];
    $privilegio = $_POST['Privilegio'];

    $sql = "INSERT INTO usuario VALUES('$id','$nombre', '$correo', '$empresa', '$contra' ,'$privilegio')";
    $query = mysqli_query($con,$sql);

    if($query){
        ?> <script>window.alert("Registro correcto");
            window.location.href = "registrar-usuario.php"; </script>   <?php

    }else{

    }

?>