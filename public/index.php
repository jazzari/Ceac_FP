<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
use app\controllers\PrincipalController;

$app = new Application(dirname(__DIR__));


$app->router->get('/home', [PrincipalController::class, 'home']);
$app->router->get('/contacto', [PrincipalController::class, 'contacto']);
$app->router->post('/contacto', [PrincipalController::class, 'postContacto']);


$app->run();
?>