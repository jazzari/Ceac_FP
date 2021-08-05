<?php

namespace app\core;
use app\models\Usuario;

class Application{
    public static string $ROOT_DIR;
    // public string $userClass;
    public Usuario $user;
    public Router $router;
    public Request $request;
    public Database $db;
    public Sesion $sesion;
    public ?DbModel $usuario;
   
    public static Application $app;

    public function __construct($rootPath, array $config){
        
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->sesion = new Sesion();
        $this->router = new Router($this->request);
        $this->db = new Database($config['db']);
        $this->user = new Usuario();

        $valorClavePrimaria = $this->sesion->get('usuario');
        
        if ($valorClavePrimaria){
            $clavePrimaria = (new Usuario() )->clavePrimaria();
            
            $this->user = (new Usuario() )->findOne([$clavePrimaria => $valorClavePrimaria]);
        } else {
            // $this->user = null;
        }
        
    }

    public function run(){
        echo $this->router->resolve();
    }

    public function login(DbModel $usuario){
        $this->usuario = $usuario;
        $clavePrimaria = $usuario->clavePrimaria();
        $valorClavePrimaria = $usuario->{$clavePrimaria};
        $this->sesion->set('usuario', $valorClavePrimaria);
        return true;
    }

    public function logout(){
        $this->usuario = NULL;
        $this->sesion->remove('usuario');
    }

    public static function esVisitante(){
        return !self::$app->user;
    }

    public static function mostrarNombre(){
        return $user->$nombre.' '.$apellidos;
    }
}
?>