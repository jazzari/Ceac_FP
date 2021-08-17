<?php
namespace app\models;
use app\core\Model;
use app\core\Application;
use app\models\Usuario;

class Login extends Model{
    public string $correo = '';
    public string $pass = '';

    public function login(){
        $usuario = new Usuario();
        $usuario = $usuario->findOne(['correo' => $this->correo]);
        if (!$usuario){
            // usuario no existe (ERROR)
            echo "<script type=\"text/javascript\">
                alert('No existe una cuenta con ese correo!');
                
                </script>";
            return false;
        }
        if (!password_verify($this->pass, $usuario->pass)){
            echo "<script type=\"text/javascript\">
                alert('La contraseña es incorrecta!');
                
                </script>";
            return false;
        }
        
        return Application::$app->login($usuario);
    }
}
?>