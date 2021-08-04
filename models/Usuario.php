<?php
namespace app\models;
use app\core\DbModel;

class Usuario extends DbModel{
    public string $user = '';
    public string $nombre = '';
    public string $apellidos = '';
    public string $correo = '';
    public string $pass = '';

    public function tableName(): string{
        return  'usuario';
    }

    public function registro(){
        return $this->guardar();
    }

    public function atributos(): array{
        return ['user', 'nombre', 'apellidos', 'correo', 'pass'];
    }
}
?>