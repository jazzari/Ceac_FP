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
                    <div class="col-md-3">  
                        <h5 class="card-subtitle mb-2 text-muted text-center">Nombre</h5>
                    </div>
                    <div class="col-md-3"> 
                        <h5 class="card-subtitle mb-2 text-muted text-center">Contacto</h5>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="card-subtitle mb-2 text-muted text-center">Email</h5>
                    </div>
                </div>

                <?php foreach($listaAseg as $aseguradora){ ?>
                <div class="card-body row">
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['nombre']) ?></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['contacto']) ?></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($aseguradora['correo']) ?></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-2">
                        
                        <a href="#" class="btn btn-primary btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                            
                       
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>