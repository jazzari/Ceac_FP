<?php
// echo '<pre>';
// var_dump($listAseg);
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
                        <h5 class="card-title text-center">Registro de Asegurados</h5>
                        <form action="" class="row g-3" data-form="save" method="POST">
                            <div>
                                <label class="form-label" for="nombre">Nombre</label>
                                <input class="form-control" type="text" id="nombre" name="nombre" required autofocus />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            
                                <label class="form-label mt-3" for="direccion">Dirección</label>
                                <input class="form-control" type="text" id="direccion" name="direccion" required
                                    autofocus />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="telefono">Teléfono</label>
                                <input class="form-control" type="number" id="telefono" name="telefono" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label" for="domicilio">Domicilio de Reparación</label>
                                <input class="form-control" type="text" id="domicilio" name="domicilio" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col">
                            
                                <label class="form-label" for="aseguradora_id">Aseguradora</label>
                                <select class="form-select" id="aseguradora_id" name="aseguradora_id"                               
                                    aria-label="Floating label select example">
                                    <option selected>Seleccione Aseguradora</option>
                                    <?php foreach($listAseg as $aseguradora){ ?>
                                        <option value="<?php print_r($aseguradora['aseguradora_id']) ?>"><?php print_r($aseguradora['nombre']) ?></option>
                                        <?php } ?>  
                                
                                </select>
                                
                                <div class="valid-feedback">Warning:  Trying to access array offset on value of type null
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