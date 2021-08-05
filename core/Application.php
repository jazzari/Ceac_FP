<?php

namespace app\core;

class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Database $db;
    public Sesion $sesion;
    public static Application $app;

    public function __construct($rootPath, array $config){
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->sesion = new Sesion();
        $this->router = new Router($this->request);
        $this->db = new Database($config['db']);
    }

    public function run(){
        echo $this->router->resolve();
    }
}
?>