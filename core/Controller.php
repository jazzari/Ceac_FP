<?php
namespace app\core;
use app\core\middlewares\BaseMiddleware;

class Controller{
    public array $middlewares = [];
    public string $accion = '';

    public function render($vista, $params = []){
        return Application::$app->router->renderVista($vista, $params);
    }

    public function registroMiddleware(BaseMiddleware $middleware){
        
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array{
        return $this->middlewares;
    }
}
?>