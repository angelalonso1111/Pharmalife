<?php 

    include("conexion.php");
    $con = conectar();

    $ID = $_GET['id'];

    $sql = "SELECT * FROM usuario WHERE id='$ID'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container mt-10">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center" class="editar">Editar usuario</h2>
                <form action="actualizar-usuario.php" method="POST">

                <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
                    <div class="mb-4"><h5>Nombre</h5>
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'] ?>"></div>
                    <div class="mb-4"><h5>Correo</h5>
                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo" value="<?php echo $row['email'] ?>"></div>
                    <div class="mb-4"><h5>Empresa</h5>
                    <input type="text" class="form-control mb-3" name="Empresa" placeholder="Empresa" value="<?php echo $row['Empresa'] ?>"></div>
                    <div class="mb-4"><h5>Contraseña</h5>
                    <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña" value="<?php echo $row['password'] ?>"></div>
                    <div class="mb-4"><h5>Privilegio</h5>
                    <input type="text" class="form-control mb-3" name="Privilegio" placeholder="Privilegios" value="<?php echo $row['Privilegio'] ?>"></div>

                    <input type="submit" class="btn btn-success" value="Actualizar">
                </form>
            </div>
        </div>
</div>
</body>
</html>