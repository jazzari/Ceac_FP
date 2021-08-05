<?php
use app\core\Application;
use app\controllers\PrincipalController;
use app\controllers\AuthController;
use app\models\Usuario;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'claseUsuario' => Usuario::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/home', [PrincipalController::class, 'home']);

$app->router->get('/contacto', [PrincipalController::class, 'contacto']);
$app->router->post('/contacto', [PrincipalController::class, 'postContacto']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/registro', [AuthController::class, 'registro']);
$app->router->post('/registro', [AuthController::class, 'registro']);


$app->run();
?>