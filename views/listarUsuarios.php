<?php
// echo '<pre>';
// var_dump($listaUsuarios);
// echo '</pre>';
// exit;
?>

<div class="container justify-content-center align-items-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card ">
                <div class="card-header text-center fw-bold">
                    Usuarios
                </div>
                <div class="card-body row">
                    <div class="col-md-3">  
                        <h5 class="card-subtitle mb-2 text-muted">Usuario</h5>
                    </div>
                    <div class="col-md-3"> 
                        <h5 class="card-subtitle mb-2 text-muted ">Nombre</h5>
                    </div>
                    <div class="col-md-3"> 
                        <h5 class="card-subtitle mb-2 text-muted ">Apellidos</h5>
                    </div>
                    <div class="col-md-3">
                        <h5 class="card-subtitle mb-2 text-muted">Email</h5>
                    </div>
                </div>

                <?php foreach($listaUsuarios as $usuario){ ?>
                <div class="card-body row">
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($usuario['user']) ?></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($usuario['nombre']) ?></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($usuario['apellidos']) ?></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold"><?php echo($usuario['correo']) ?></li>
                            
                        </ul>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>