<?php
use app\core\Application;
?>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Soluciones Integrales SL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Inicio</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto">Contacto</a>
                    </ul>
                </div>
                <?php if (Application::esVisitante()): ?>
                <div class="navbar-nav ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/registro">Registrarse</a>
                        </li>
                    </ul>
                </div>
                <?php elseif (Application::esAdmin()): ?>
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/perfil">Mi Cuenta</a>
                        </li>
                </ul>
                <ul class="navbar-nav ms-1">
                        <li class="nav-item">
                            <a class="nav-link" href="/panelAdmin">Panel Admin</a>
                        </li>
                </ul>
                <ul class="navbar-nav ms-1">
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Cerrar Sesion</a>
                        </li>
                </ul>
                <?php else: ?>
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/perfil">Mi Cuenta</a>
                        </li>
                </ul>
                <ul class="navbar-nav ms-1">
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Cerrar Sesion</a>
                        </li>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</div>