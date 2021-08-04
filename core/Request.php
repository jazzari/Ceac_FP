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

    public function getContenido(){
        $contenido = [];
        if ($this->getMethod() === 'get'){
            foreach ($_GET as $clave => $valor){
                // limpia el contenido de $_GET the caracteres inválidos
                $contenido[$clave] = filter_input(INPUT_GET, $clave, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->getMethod() === 'post'){
            foreach ($_POST as $clave => $valor){
                // limpia el contenido de $_POST the caracteres inválidos
                $contenido[$clave] = filter_input(INPUT_POST, $clave, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $contenido;
    }
}
?>