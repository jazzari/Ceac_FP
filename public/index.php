<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
use app\controllers\PrincipalController;
use app\controllers\AuthController;

$app = new Application(dirname(__DIR__));

$app->router->get('/home', [PrincipalController::class, 'home']);

$app->router->get('/contacto', [PrincipalController::class, 'contacto']);
$app->router->post('/contacto', [PrincipalController::class, 'postContacto']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/registro', [AuthController::class, 'registro']);
$app->router->post('/registro', [AuthController::class, 'registro']);


$app->run();
?>