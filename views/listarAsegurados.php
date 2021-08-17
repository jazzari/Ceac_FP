

<div class="container justify-content-center align-items-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card ">
                <div class="card-header text-center fw-bold">
                    Asegurados
                </div>
                <div class="card-body row">
                    <div class="col-md-2">  
                        <h5 class="card-subtitle mb-2 text-muted">Nombre</h5>
                    </div>
                    <div class="col-md-3">  
                        <h5 class="card-subtitle mb-2 text-muted">Dirección</h5>
                    </div>
                    
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Teléfono</h5>
                    </div>
                    <div class="col-md-3">
                        <h5 class="card-subtitle mb-2 text-muted">Domicilio</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Aseguradora</h5>
                    </div>
                </div>

                <?php foreach($listaAsegurados as $asegurado){ ?>
                <div class="card-body row">
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($asegurado['nombre']) ?></li>   
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($asegurado['direccion']) ?></li>    
                        </ul>
                    </div>
                
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($asegurado['telefono']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($asegurado['domicilio']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php 
                            foreach($listAseg as $aseguradora){
                                if ($aseguradora['aseguradora_id'] === $asegurado['aseguradora_id']){
                                    echo($aseguradora['nombre']);
                                }
                            }
                            ?></li>
                        </ul>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>