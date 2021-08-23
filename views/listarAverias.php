<?php

?>

<div class="container justify-content-center align-items-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card ">
                <div class="card-header text-center fw-bold">
                    Averías
                </div>
                <div class="card-body row">
                    <div class="col-md-2">  
                        <h5 class="card-subtitle mb-2 text-muted">Asunto</h5>
                    </div>
                    <div class="col-md-2">  
                        <h5 class="card-subtitle mb-2 text-muted">Descripción</h5>
                    </div>
                    <div class="col-md-2"> 
                        <h5 class="card-subtitle mb-2 text-muted ">Fecha</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Asegurado</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Aseguradora</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Foto</h5>
                    </div>
                </div>

                <?php foreach($listAveria as $averia){ ?>
                
                <div class="card-body row">
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($averia['asunto']) ?></li>   
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($averia['descripcion']) ?></li>    
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($averia['fecha']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <?php foreach($listAsegurados as $asegurado){ ?>
                                <?php if ($asegurado['asegurado_id'] === $averia['asegurado_id']){ ?>
                            <li class="list-group-item fw-bold"><?php echo($asegurado['nombre']) ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <?php foreach($listAseguradora as $aseguradora){ ?>
                                <?php if ($aseguradora['aseguradora_id'] === $averia['aseguradora_id']){ ?>
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['nombre']) ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($averia['foto']) ?></li>
                        </ul>
                    </div>
                    
                </div>
                <?php } ?>
 
            </div>
        </div>
    </div>
</div>