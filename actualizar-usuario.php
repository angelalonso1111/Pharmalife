<?php 

    include("conexion.php");
    $con = conectar();

    $ID = $_POST['ID'];
    $Nombre = $_POST['Nombre'];
    $email = $_POST['email'];
    $Empresa = $_POST['Empresa'];
    $password = $_POST['password'];
    $Privilegio = $_POST['Privilegio'];

    $sql = "UPDATE usuario SET Nombre='$Nombre',email='$email', Empresa='$Empresa', password = '$password', Privilegio = '$Privilegio' WHERE ID='$ID'";
    $query = mysqli_query($con,$sql);

        if($query){
            Header("Location: usuario.php");
        }

?>