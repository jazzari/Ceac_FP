<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
// use app\core\Router;

$app = new Application(dirname(__DIR__));


$app->router->get('/home', function(){
    echo "Welcome";
});
$app->router->get('/contacto', 'contacto');


$app->run();
?>