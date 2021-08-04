<?php
namespace app\models;
use app\core\Model;

class RegistroModel extends Model{
    public string $usuario;
    public string $nombre;
    public string $apellidos;
    public string $email;
    public string $contraseña;

    public function registro(){
        echo "Creating new User";
    }
}
?>