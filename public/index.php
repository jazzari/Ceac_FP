<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Aplicacion;
// use app\core\Router;

$app = new Aplicacion();


$app->router->get('/home', function(){
    return "Bienvenidos!!!";
});
$app->router->get('/contacto', function(){
    return "Contactanos!!!";
});


$app->run();
?>