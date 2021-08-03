<?php

namespace app\core;

class Router{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve(){ 
        $path = $this->request->getPath();

        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false){
            return "Not Found!";
        }
        // comprueba si el callback es un string y llama a la vista
        if (is_string($callback)){
            return $this->renderVista($callback);
        }

        return call_user_func($callback);
    }

    public function renderVista($vista){
       
        $contenidoLayout = $this->contenidoLayout();
        
        $contenidoVista = $this->renderSoloVista($vista);
       
        return str_replace('{{contenido}}', $contenidoVista, $contenidoLayout);
    }

    protected function contenidoLayout(){
        // pone el layout en el buffer 
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/principal.php";
        return ob_get_clean();
    }

    protected function renderSoloVista($vista){
         // pone la vista en el buffer
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$vista.php";
        return ob_get_clean();
    }
}
?>