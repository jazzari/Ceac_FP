<?php
namespace app\core;

class Request{
    
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        
        // chequea si hay query en la url
        $posicion = strpos($path, '?');
        if($posicion === false){
            return $path;
        }
        return substr($path, 0, $posicion);

    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
?>