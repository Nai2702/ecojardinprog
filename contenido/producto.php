<?PHP 
$id = $_GET['id'] ?? 0;

$planta = Planta::catalogo_x_id($id);

?>

<div class="container">

    <div class="row">
        <?PHP if (!empty($planta)) { ?>
            <div class="col-6 mx-auto">
                    <div class="producto mb-3">

                        <img src="<?= $planta->getImagen() ?>" class="my-3 img_hover img-fluid rounded-pill d-block mx-auto w-50" alt="imagen de <?= $planta->getNombre() ?> ">

                        <div class="card-body">
                            <h1 class="text-start text-md-center py-2 h4 nombre_titulo"><?= $planta->getNombre()?></h1>
                            <p class="card-text my-2"><?= $planta->getDescripcion() ?></p>
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="fw-bold">Categoria:</span> <?= $planta->getCategoria()?></li>
                                <li class="list-group-item"><span class="fw-bold">Cuidado:</span> <?= $planta->getCuidado() ?></li>
                                <li class="list-group-item"><span class="fw-bold">Tamaño:</span> <?= $planta->getTamanio()?></li>
                            </ul>

                        <div class="card-body">
                            <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= $planta->formatear_precio()?></div>
                            <a href="#" class="d-flex btn btn-pink btn-lg mx-auto ">COMPRAR</a>
                        </div>

                     </div>
                </div>

    </div>
</div>    
        <?PHP } else { ?>
            <div class="col">
                <h2 class="text-center m-5">No se encontró el producto deseado.</h2>
            </div>
        <?PHP } ?>
  
