<?php
use app\core\Application;
use app\controllers\PrincipalController;
use app\controllers\UsuarioController;
use app\controllers\AseguradoraController;
use app\controllers\AseguradoController;
use app\controllers\AveriaController;
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

$app->router->get('/login', [UsuarioController::class, 'login']);
$app->router->post('/login', [UsuarioController::class, 'login']);

$app->router->get('/registro', [UsuarioController::class, 'registro']);
$app->router->post('/registro', [UsuarioController::class, 'registro']);

$app->router->get('/logout', [UsuarioController::class, 'logout']);
$app->router->get('/perfil', [UsuarioController::class, 'perfil']);
$app->router->get('/panelAdmin', [UsuarioController::class, 'panelAdmin']);

$app->router->get('/listarUsuarios', [UsuarioController::class, 'listarUsuarios']);

$app->router->get('/regAseguradora', [AseguradoraController::class, 'regAseguradora']);
$app->router->post('/regAseguradora', [AseguradoraController::class, 'regAseguradora']);
$app->router->get('/listarAseguradoras', [AseguradoraController::class, 'listarAseguradoras']);

$app->router->get('/regAsegurado', [AseguradoController::class, 'regAsegurado']);
$app->router->post('/regAsegurado', [AseguradoController::class, 'regAsegurado']);
$app->router->get('/listarAsegurados', [AseguradoController::class, 'listarAsegurados']);
$app->router->get('/getAsegurado', [AseguradoController::class, 'getAsegurado']);

$app->router->get('/regAveria', [AveriaController::class, 'regAveria']);
$app->router->post('/regAveria', [AveriaController::class, 'regAveria']);
$app->router->get('/listarAverias', [AveriaController::class, 'listarAverias']);


$app->run();
?>