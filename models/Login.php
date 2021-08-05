<?php
namespace app\models;
use app\core\Model;

class Login extends Model{
    public string $correo = '';
    public string $pass = '';

    public function login(){
        $usuario = Usuario::findOne(['correo' => $this->correo]);
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
        echo '<pre>';
var_dump($usuario);
echo '</pre>';
exit;
        return Application::$app->login($usuario);
    }
}
?>