<?php

?>

<div class="container justify-content-center align-items-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card ">
                <div class="card-header text-center fw-bold">
                    Aseguradoras
                </div>
                <div class="card-body row">
                    <div class="col-md-2">  
                        <h5 class="card-subtitle mb-2 text-muted">Nombre</h5>
                    </div>
                    <div class="col-md-2">  
                        <h5 class="card-subtitle mb-2 text-muted">Domicilio</h5>
                    </div>
                    <div class="col-md-2"> 
                        <h5 class="card-subtitle mb-2 text-muted ">CIF</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Email</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Teléfono</h5>
                    </div>
                    <div class="col-md-2">
                        <h5 class="card-subtitle mb-2 text-muted">Contacto</h5>
                    </div>
                </div>

                <?php foreach($listaAseg as $aseguradora){ ?>
                <div class="card-body row">
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['nombre']) ?></li>   
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['domicilio']) ?></li>    
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['cif']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['correo']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['telefono']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['contacto']) ?></li>
                        </ul>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>