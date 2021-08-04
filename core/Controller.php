<?php
namespace app\core;

class Controller{

    public function render($vista, $params = []){
        return Application::$app->router->renderVista($vista, $params);
    }
}
?>