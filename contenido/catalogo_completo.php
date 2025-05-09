<div class="d-flex justify-content-center p-5">

    <div >
        <h1 class="text-center mb-5 fw-bold h2 text-success titulo_catalogo">Nuestro catálogo</h1>



        <div class= "container">

        <div class="row" >

        <?PHP foreach ($catalogo as $planta) { ?>

                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="producto mb-3">
                        <img src="<?= $planta->getImagen() ?>" class="my-3 img_hover img-fluid rounded-pill d-block mx-auto w-75" alt="imagen de <?= $planta->getNombre() ?> ">
                        <div class="card-body">
                            <h3 class="text-start text-md-center py-2 h4 nombre_titulo"><?= $planta->getNombre() ?></h3>
                            <p class="card-text my-2 text-center fs-5"><?= $planta->descripcion_reducida() ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold">Categoria:</span> <?= $planta->getCategoria() ?></li>
                            <li class="list-group-item"><span class="fw-bold">Cuidado:</span> <?= $planta->getCuidado() ?></li>
                            <li class="list-group-item"><span class="fw-bold">Tamaño:</span> <?= $planta->getTamanio() ?></li>
                        </ul>
                        <div class="card-body">
                            <div class="fs-3 mb-3 fw-bold text-center text-danger"><?= $planta->formatear_precio() ?></div>
                            <a href="index.php?vista=producto&id=<?= $planta->getId() ?>" class="d-block btn btn-pink btn-lg mx-auto">COMPRAR</a>
                        </div>

                    </div>
                </div>
                <?PHP } ?> 

  


        </div>
    </div>


</div>