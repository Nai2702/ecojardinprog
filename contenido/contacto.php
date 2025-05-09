<section class="row">

<div class="col-12 col-lg-6 py-2 my-auto">
    <h1  class="fs-1 text-center fw-bold text-light ">Contáctanos</h1>

<p class="mt-2 mt-lg-5 pt-3 w-75 mx-auto text-center">En Ecojardín estamos para ayudarte a encontrar las plantas perfectas para tu hogar o jardín. Si tienes alguna pregunta sobre nuestros productos o necesitas asesoramiento, no dusdes en rellenar el formulario de contacto, nuestro equipo estará encantado de atenderte y ofrecerte las mejores soluciones.</p>
</div>

<div class="col-12  col-lg-6 py-2">
    <img class="img-fluid d-block rounded-pill border border-2 mx-auto" alt="trabjadoras de ecojardin cuidando las plantas"  src="img/fotos/contacto.jpg">
</div>

</section>

<section class="row justify-content-center estilo_form">

    <div class="col-12 col-md-8 py-5">
    
    <form class="row" action="contenido/procesar.php" method="POST">

<div class="col-12 col-md-6 py-2">
    <label class="form-label" for="nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
</div>

<div class="col-12 col-md-6 py-2">
    <label class="form-label" for="apellido">Apellido</label>
    <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido" required>
</div>

<div class="col-12 col-md-6 py-2">
    <label class="form-label" for="genero">Género</label>
    <select class="form-select" name="genero" id="genero" required>
        <option selected disabled>Seleccione su Género</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
        <option value="Otro">Otro</option>
    </select>
</div>

<div class="col-12 col-md-6 py-2">
    <label class="form-label" for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo" required>
</div>

<div class="col-12 py-2">
    <label class="form-label" for="comentarios">Comentarios</label>
    <textarea class="form-control form-control-lg" name="comentarios" id="comentarios"></textarea>
</div>

<div class="col-12 text-center mt-4 py-2">
    <button type="submit" class="btn-form btn btn-lg">Enviar</button>
</div>

</form>


    </div> 


</section> 