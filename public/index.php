<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
// use app\core\Router;

$app = new Application(dirname(__DIR__));


$app->router->get('/home', 'home');
$app->router->get('/contacto', 'contacto');
$app->router->post('/contacto', function(){
    return "Handling submitted data";
});


$app->run();
?>