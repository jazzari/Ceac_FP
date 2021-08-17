<?php
// echo '<pre>';
// var_dump($listAsegurado);
// echo '</pre>';
// exit;
?>

<div class="container">

    <div class="container justify-content-center align-items-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="../assets/img/reg-clientes.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de Averias</h5>
                        <form action="" class="row g-3" data-form="save" method="GET">
                            <div class="col">

                                <label class="form-label" for="aseguradora_id">Aseguradora</label>
                                <select class="form-select mb-3" id="aseguradora_id" name="aseguradora_id"
                                    aria-label="Floating label select example" required autofocus>
                                    <option selected>Seleccione Aseguradora</option>
                                    <?php foreach($listAseguradora as $aseguradora){ ?>
                                    <option value="<?php print_r($aseguradora['aseguradora_id']) ?>">
                                        <?php print_r($aseguradora['nombre']) ?></option>
                                    <?php } ?>

                                </select>
                                <div class="col">

                                    <label class="form-label" for="aseguradora_id">Asegurado</label>
                                    <select class="form-select mb-3" id="aseguradora_id" name="aseguradora_id"
                                        aria-label="Floating label select example">
                                        <option selected>Seleccione Asegurado</option>
                                        <?php foreach($listAseg as $aseguradora){ ?>
                                        <option value="<?php print_r($aseguradora['aseguradora_id']) ?>">
                                            <?php print_r($aseguradora['nombre']) ?></option>
                                        <?php } ?>

                                    </select>
                                    <div>
                                        <label class="form-label" for="fecha">Fecha</label>
                                        <input class="form-control" type="date" id="fecha" name="fecha" required />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <label class="form-label mt-3" for="descripcion">Descripción</label>
                                        <textarea class="form-control mb-3" placeholder="Describa las averías"
                                            id="descripcion" name="descripcion" required></textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fotos" class="form-label">Fotos</label>
                                        <input class="form-control form-control-sm" type="file" id="fotos" name="fotos" multiple>
                                    </div>


                                    <div class="valid-feedback">Warning: Trying to access array offset on value of type
                                        null
                                        Looks good!
                                    </div>
                                </div>

                                <button class="btn btn-success w-100">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>