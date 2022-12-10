<?php 

    include("conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "DELETE FROM usuario WHERE id='$id'";
    $query = mysqli_query($con,$sql);

        if($query){
            ?> <script>window.alert("Eliminado correctamente");
            window.location.href = "usuario.php"; </script>   <?php
        }

?>