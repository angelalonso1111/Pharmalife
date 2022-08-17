<?php 

    include_once("conexion.php");
    $conexion = conectar();

    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($conexion,$sql);

    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>usuario</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h2>Agregar nuevo</h2>
                <form action="insertar-usuario.php" method="POST">
                    
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo">
                    <input type="text" class="form-control mb-3" name="Empresa" placeholder="Empresa">
                    <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña">
                    <input type="text" class="form-control mb-3" name="Privilegio" placeholder="Privilegios">

                    <input type="submit" class="btn btn-success">
                </form>
            </div>

            <div class="col-md-9">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Empresa</th>
                            <th>privilegio</th>
                            <th></th> 
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody>

                        <?php 
                        
                            while($row = mysqli_fetch_array($query)){
                                ?>

                                <tr>
                                    
                                    <th><?php echo $row['ID']?></th>
                                    <th><?php echo $row['Nombre']?></th>
                                    <th><?php echo $row['email']?></th>
                                    <th><?php echo $row['Empresa']?></th>
                                    <th><?php echo $row['Privilegio']?></th>
                                    <th><a href="actualizar-usuario2.php?id=<?php echo $row['ID']?>" class="btn btn-warning"> Editar </a></th>
                                    <th><a href="delete-usuario.php?id=<?php echo $row['ID']?>" class="btn btn-danger"> Eliminar </a></th>
                                </tr>
                            <?php }
                            ?>
                        

                        <th></th>
                        <th></th>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>
</html>