<?php
?>

<div class="container justify-content-center align-items-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3 text-center">Mi Cuenta</h1>
            <div class="card ">
                <div class="card-header text-center fw-bold">
                    <?php print_r($_SESSION['user']) ?>
                </div>
                <div class="card-body row">
                    <div class="col-md-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold">Nombre</li>
                            <li class="list-group-item"><?php print_r($_SESSION['nombre']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold">Apellidos</li>
                            <li class="list-group-item"><?php print_r($_SESSION['apellidos']) ?></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold">Email</li>
                            <li class="list-group-item"><?php print_r($_SESSION['correo']) ?></li>
                        </ul>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <a href="/regAveria" class="btn btn-outline-primary">Registrar Avería</a>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <a href="/listarAverias" class="btn btn-outline-primary">Listar Averías</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
