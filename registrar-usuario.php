<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-6">
        <div class="row">
            <div class="col-md-6">
                <h2>Crear usuario nuevo</h2>
                <form action="insertar-usuario2.php" method="POST" id="formulario">
                    
                <div id="grupo__nombre"><input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" id="grupo__nombre"></div>
                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo">
                    <input type="text" class="form-control mb-3" name="Empresa" placeholder="Empresa">
                    <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña">
                   

                    <input type="submit" class="btn btn-success">
                </form>
            </div>
</body>
</html>