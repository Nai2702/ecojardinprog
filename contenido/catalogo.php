<?php

$data= $_GET;

// verificar en que vista estamos
if (isset($data['vista']) && $data['vista'] === "catalogo") {
    // Si la vista es catalogo, obtenemos el catalogo de plantas
    if (isset($data['cat'])) {
        // Si se ha seleccionado una categoria, filtramos el catalogo por categoria
        $categoriaSeleccionada = $data['cat'];
        $tituloCatalogo = "Catálogo de plantas de tipo " . $categoriaSeleccionada;
        // Filtramos el catalogo por categoria
    } elseif (isset($data['tam'])) {
        // Si se ha seleccionado un tamaño, filtramos el catalogo por tamaño
        $tamanioSeleccionado = $data['tam'];
        $tituloCatalogo = "Catálogo de plantas " . $tamanioSeleccionado."s";
    } else {
        $tituloCatalogo = "Nuestro Catálogo";
    }
}


?>


<div class=" d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold h2 text-success titulo_catalogo"><?= $tituloCatalogo ?></h1>
        <div class="container">

            <div class="row">

            <?PHP foreach ($catalogo as $planta) { ?>

            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="producto mb-3">
                    <img src="<?= $planta->getImagen() ?>" class="my-3 img_hover img-fluid rounded-pill d-block mx-auto w-75" alt="imagen de <?= $planta->getNombre() ?> ">
                    <div class="card-body">
                        <h3 class="text-start text-center py-2 h4  nombre_titulo"><?= $planta->getNombre() ?></h3>
                        <p class="card-text my-2 text-center fs-5"><?=$planta->descripcion_reducida()?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="fw-bold">Categoria:</span> <?= $planta->getCategoria() ?></li>
                        <li class="list-group-item"><span class="fw-bold">Cuidado:</span> <?= $planta->getCuidado()?></li>
                        <li class="list-group-item"><span class="fw-bold">Tamaño:</span> <?= $planta->getTamanio() ?></li>
                    </ul>
                    <div class="card-body">
                        <div class="fs-3 mb-3 fw-bold text-center text-danger"><?= $planta->formatear_precio() ?></div>
                        <a href="index.php?vista=producto&id=<?= $planta->getId() ?>" class="d-block btn btn-pink btn-lg mx-auto ">COMPRAR</a>
                    </div>

                </div>
            </div>
            
            <?PHP } ?> 
            </div>
        </div>
    </div>
</div>