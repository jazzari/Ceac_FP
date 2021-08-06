<?php
namespace app\core\middlewares;
use app\core\Application;

class AuthMiddleware extends BaseMiddleware{
    public array $acciones = [];

    public function __construct(array $acciones = []){
        $this->acciones = $acciones;
    }

    public function execute(){
        if (Application::esVisitante()){
            if (empty($this->acciones) || in_array(Application::$app->controller->accion, $this->acciones)){
                echo "<script type=\"text/javascript\">
                alert('No tiene permisos para acceder a esa página');
                window.location.href='/home';
                </script>";
            }
        }
    }
}
?>