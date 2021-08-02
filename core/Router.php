<?php

namespace app\core;

class Router{
    public Request $request;
    protected array $rutas = [];

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->rutas['get'][$path] = $callback;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->rutas[$method][$path] ?? false;
        
        if ($callback === false){
            echo "Not Found!";
            exit;
        }
        echo call_user_func($callback);
    }
}
?>