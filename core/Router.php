<?php

namespace app\core;
use app\core\Controller;

class Router{
    public Request $request;
    public Controller $controller;
    protected array $routes = [];

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }

    public function resolve(){ 
        $path = $this->request->getPath();

        $method = $this->request->method();
        
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false){
            return $this->renderVista("_404");
        }
        // comprueba si el callback es un string y llama a la vista
        if (is_string($callback)){
            return $this->renderVista($callback);
        }
       
        // comprueba si el callback es un array y crea una instancia del controlador
        if (is_array($callback)){
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            $controller->accion = $callback[1];
            $callback[0] = $controller;
            foreach ($controller->getMiddlewares() as $middleware){
                $middleware->execute();
            }
        }
        return call_user_func($callback, $this->request);
    }

    public function renderVista($vista, $params = []){
       
        $contenidoLayout = $this->contenidoLayout();
        
        $contenidoVista = $this->renderSoloVista($vista, $params);
       
        return str_replace('{{contenido}}', $contenidoVista, $contenidoLayout);
    }

    public function renderContenido($contenidoVista){
       
        $contenidoLayout = $this->contenidoLayout();
       
        return str_replace('{{contenido}}', $contenidoVista, $contenidoLayout);
    }

    protected function contenidoLayout(){
        // pone el layout en el buffer 
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/principal.php";
        return ob_get_clean();
    }

    protected function renderSoloVista($vista, $params){
        foreach ($params as $clave => $valor){
            $$clave = $valor;
        }
        
         // pone la vista en el buffer
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$vista.php";
        return ob_get_clean();
    }
}
?>