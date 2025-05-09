<?php 
require_once("classes/Planta.php");
require_once("classes/Pagina.php");

$seccion = isset($_GET['vista']) ? $_GET['vista'] : 'inicio';
$pagina = Pagina::validar_pagina($seccion);

$categoriaSeleccionada = isset($_GET['cat']) ? $_GET['cat'] : null;
$tamanioSeleccionado = isset($_GET['tam']) ? $_GET['tam'] : null;




if ($categoriaSeleccionada) { //ASUMIENDO QUE TENEMOS UNA CATEGORIA SELECCIONADA
    $catalogo = Planta::catalogo_x_categoria($categoriaSeleccionada);
} elseif ($tamanioSeleccionado) { //ASUMIENDO QUE TENEMOS UN TAMAÑO SELECCIONADO
    $catalogo = Planta::catalogo_x_tamanio($tamanioSeleccionado);

}else {
    $catalogo = Planta::catalogo_completo(); 
};



?>


<!DOCTYPE html>
<html lang="es ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecojardín | <?= $pagina->getTitulo()?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=WindSong&display=swap" rel="stylesheet">
</head>
<body class="contenedor_error">
 
    <header class="container-fluid">
        <div class="row">
        <nav class="navbar navbar-expand-lg sticky-top  bg-gris">
    <div class="container-fluid">
    <div class="navbar-brand "><img class="img-fluid d-block my-auto w-50" src="img/iconos/logo_nuevo.png" alt="logo de ecojardin"></div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraNavegacion">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="barraNavegacion">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a  class="text-light nav-link" href="index.php?vista=inicio">Inicio</a></li>
                <li class="nav-item "><a class="nav-link text-light" href="index.php?vista=catalogo_completo">Catálogo</a></li>

                <!-- Menú desplegable para categorías -->
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="categoriasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriasDropdown">
                        <li><a class="dropdown-item fs-6" href="index.php?vista=catalogo&cat=Suculentas">Suculentas</a></li>
                        <li><a class="dropdown-item fs-6" href="index.php?vista=catalogo&cat=Ornamental">Ornamentales</a></li>
                        <li><a class="dropdown-item fs-6" href="index.php?vista=catalogo&cat=Tropical">Tropicales</a></li>
                    </ul>
                </li>

                <!-- Menú desplegable para tamaños -->
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="tamanosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tamaños
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tamanosDropdown">
                        <li><a class="dropdown-item fs-6" href="index.php?vista=catalogo&tam=Pequeña">Pequeña</a></li>
                        <li><a class="dropdown-item fs-6" href="index.php?vista=catalogo&tam=Mediana">Mediana</a></li>
                        <li><a class="dropdown-item fs-6" href="index.php?vista=catalogo&tam=Grande">Grande</a></li>
                    </ul>
                </li>

                <li class="nav-item "><a class="nav-link text-light" href="index.php?vista=contacto">Contacto</a></li>
                <li class="nav-item "><a class="nav-link text-light" href="index.php?vista=datos">Datos Personales</a></li>
            </ul>
        </div>
    </div>
</nav>

        </div>
      <div class="container-md px-0">
    </header>

    <main class="container my-5 py-3">

    

    <?php 
    
        require_once  "contenido/{$pagina->getNombre()}.php";
  
    ?>

      
    </main>


    <footer class="container-fluid bg_footer">


      

     <div class="row">
       
            <span class="col-12 foot-li pt-2 "><img class="img-fluid mb-5" src="img/iconos/logo_nuevo.png" alt="logo"></span>
           
            <span class="col-12 fs-6 text-center py-5 text-light" > © Ecojardín 2025  | todos los derechos reservados | Nairut Contreras.</span>

    </div>
      

        

    </footer>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            
	
</body>
</html>