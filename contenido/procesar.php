
<?php

$datos = $_POST;



$nombre = $datos["nombre"];
$apellido = $datos["apellido"];



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    
</head>
<body>
<section class="bg-gris">
    <div class="container py-5 ">
        <div class="row">
            <div class="col-12">
                <div class="producto mb-3 p-4 shadow-lg rounded-5">
                    <div class="card-body text-center">
                        <h1 class="text-start text-md-center py-2 nombre_titulo">¡Bienvenidoooo!</h1>
                        <p class="card-tex fs-1 text-success titulo_catalogo fw-bold "> <strong><?=$nombre; ?> <?= $apellido; ?></strong></p>
                        <img src="../img/fotos/registro.png" class="my-3 img-fluid  d-block mx-auto w-50" alt="imagen de Registro">
                    </div>

                    <div>
                    <a class="d-flex justify-content-center text-decoration-none" href="../index.php">
                    <button class="fs-3  btn-pink" >Volver al Inicio</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

  
</section>

    
</body>
</html>



