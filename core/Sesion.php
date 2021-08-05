<?php
namespace app\core;

class Sesion{

    public function __construct(){
        session_start();
    }

    public function set($clave, $valor){
         $_SESSION[$clave] = $valor;
    }

    public function get($clave){
         return $_SESSION[$clave] ?? false;
    }

    public function remove($clave){
        unset($_SESSION[$clave]);
    }
}
?>